<?php

function doCollection($command) {

    $collection = new musicCollection(null);

    $files = array();
    $filecount = 0;
    parse_mopidy_json_data($collection, json_decode(file_get_contents('php://input')));

    return $collection;

}

function parse_mopidy_json_data($collection, $jsondata) {

    global $dbterms;
    $plpos = 0;
    foreach($jsondata as $searchresults) {

        if ($searchresults->{'__model__'} == "DBTerms") {

            if (property_exists($searchresults, 'rating')) {
                $dbterms['rating'] = $searchresults->rating;
            }
            if (property_exists($searchresults, 'tags')) {
                $dbterms['tags'] = $searchresults->tags;
            }

        } else if ($searchresults->{'__model__'} == "SearchResult") {

            if (property_exists($searchresults, 'artists')) {
                foreach ($searchresults->artists as $track) {
                    parseArtist($collection, $track);
                }
            }

            if (property_exists($searchresults, 'albums')) {
                foreach ($searchresults->albums as $track) {
                    parseAlbum($collection, $track);
                }
            }

            if (property_exists($searchresults, 'tracks')) {
                foreach ($searchresults->tracks as $track) {
                    process_file($collection, parseTrack($track));
                }
            }

        } else if ($searchresults->{'__model__'} == "TlTrack") {
            process_file($collection, parseTrack($searchresults->track, $plpos, $searchresults->{'tlid'}));
        }
        $plpos++;
    }

}

function parseArtist($collection, $track) {
    $trackdata = array();
    $trackdata['linktype'] = 'artist';
    if (property_exists($track, 'uri')) {
        $trackdata['SpotiArtist'] = $track->{'uri'};
        $trackdata['file'] = $track->{'uri'};
    }
    if (property_exists($track, 'name')) {
        $trackdata['Artist'] = $track->{'name'};
        $trackdata['Title'] = "Artist:".$track->{'name'};
    }
    process_file($collection, $trackdata);
}

function parseAlbum($collection, $track) {
    $trackdata = array();
    $domain = null;
    $trackdata['linktype'] = 'album';
    if (property_exists($track, 'uri')) {
        $trackdata['file'] = $track->{'uri'};
        $domain = getDomain($track->{'uri'});
    }
    if (property_exists($track, 'images')) {
        $trackdata['Image'] = $track->{'images'}[0];
        if (substr($trackdata['Image'],0,4) == "http") {
           $trackdata['Image'] = "getRemoteImage.php?url=".$trackdata['Image'];
        }
    }
    if (property_exists($track, 'date')) {
        $trackdata['Date'] = $track->{'date'};
    }
    if (property_exists($track, 'name')) {
        $trackdata['Album'] = $track->{'name'};
        $trackdata['Title'] = "Album:".$track->{'name'};
    }
    if (property_exists($track, 'artists')) {
        $trackdata['Artist'] = mopidyDoesWierdThings($track->{'artists'});
        if (property_exists($track->{'artists'}[0], 'uri')) {
            $trackdata['SpotiArtist'] = $track->{'artists'}[0]->{'uri'};
        }

    }
    if ($domain == "podcast" && !array_key_exists('Artist', $trackdata)) {
        $trackdata['Artist'] = "Podcasts";
    }

    process_file($collection, $trackdata);
}

function parseTrack($track, $plpos = null, $plid = null) {

    $trackdata = array();
    $trackdata['Pos'] = $plpos;
    $trackdata['Id'] = $plid;
    $domain = null;
    if (property_exists($track, 'uri')) {
        $trackdata['file'] = $track->{'uri'};
        $domain = getDomain($track->{'uri'});
        debug_print("Domain is ".$domain,"FUCK");
    } else {
        $trackdata['file'] = "Broken Track!";
        $trackdata['Artist'] = "[Unknown]";
        $trackdata['Album'] = "[Unknown]";
    }
    if (property_exists($track, 'name')) {
        $trackdata['Title'] = $track->{'name'};
    }
    if (property_exists($track, 'length')) {
        $trackdata['Time'] = $track->{'length'}/1000;
    } else {
        $trackdata['Time'] = 0;
    }
    if (property_exists($track, 'track_no')) {
        $trackdata['Track'] = $track->{'track_no'};
    } else {
        $trackdata['Track'] = 0;
    }
    if (property_exists($track, 'disc_no')) {
        $trackdata['Disc'] = $track->{'disc_no'};
    } else {
        $trackdata['Disc'] = 1;
    }
    if (property_exists($track, 'date')) {
        $trackdata['Date'] = $track->{'date'};
    }
    if (property_exists($track, 'genre')) {
        $trackdata['Genre'] = $track->{'genre'};
    }
    if (property_exists($track, 'last_modified')) {
        $trackdata['Last-Modified'] = $track->{'last_modified'};
    } else {
        $trackdata['Last-Modified'] = 0;
    }
    if (property_exists($track, 'musicbrainz_id')) {
        $trackdata['MUSICBRAINZ_TRACKID'] = $track->{'musicbrainz_id'};
    }
    if (property_exists($track, 'artists')) {
        $trackdata['Artist'] = mopidyDoesWierdThings($track->{'artists'});
        if (property_exists($track->{'artists'}[0], 'musicbrainz_id')) {
            $trackdata['MUSICBRAINZ_ARTISTID'] = $track->{'artists'}[0]->{'musicbrainz_id'};
        }
    }
    if (property_exists($track, 'album')) {
        if (property_exists($track->{'album'}, 'musicbrainz_id')) {
            $trackdata['MUSICBRAINZ_ALBUMID'] = $track->{'album'}->{'musicbrainz_id'};
        }
        // Album date overrides track date. I guess. Not sure. Probably a good idea.
        if (property_exists($track->{'album'}, 'date')) {
            $trackdata['Date'] = $track->{'album'}->{'date'};
        }
        if (property_exists($track->{'album'}, 'name')) {
            $trackdata['Album'] = $track->{'album'}->{'name'};
        }
        if (property_exists($track->{'album'}, 'images')) {
            $im = "";
            foreach ($track->{'album'}->{'images'} as $i) {
                if ($im === "") {
                    $im = $i;
                }
            }
            if (substr($im,0,4) == "http") {
                $im = "getRemoteImage.php?url=".$im;
            }
            $trackdata['Image'] = $im;
        }
        if (property_exists($track->{'album'}, 'uri')) {
            $trackdata['SpotiAlbum'] = $track->{'album'}->{'uri'};
        }
        if (property_exists($track->{'album'}, 'artists')) {
            if (property_exists($track->{'album'}->{'artists'}[0], 'name')) {
                $trackdata['AlbumArtist'] = $track->{'album'}->{'artists'}[0]->{'name'};
            }
            if (property_exists($track->{'album'}->{'artists'}[0], 'musicbrainz_id')) {
                $trackdata['MUSICBRAINZ_ALBUMARTISTID'] = $track->{'album'}->{'artists'}[0]->{'musicbrainz_id'};
            }
            if (property_exists($track->{'album'}->{'artists'}[0], 'uri')) {
                $trackdata['SpotiArtist'] = $track->{'album'}->{'artists'}[0]->{'uri'};
            }
        }
    }

    if ($domain == "podcast" && !array_key_exists('Album', $trackdata)) {
        $trackdata['Album'] = "Podcasts";
    }

    if ($domain == "podcast" && !array_key_exists('Artist', $trackdata)) {
        $trackdata['Artist'] = "Podcasts";
    }

    return $trackdata;

}

function mopidyDoesWierdThings($artists) {
    $art = array();
    foreach($artists as $a) {
        if (property_exists($a, 'name')) {
            if (preg_match('/ & /', $a->{'name'})) {
                // This might be a problem in Mopidy BUT Spotify tracks are coming back with
                // artist[0] = King Tubby, artist[1] = Johnny Clarke, artist[2] = King Tubby & Johnny Clarke
                $art = array( $a->name );
                break;
            } else {
                array_push($art, $a->{'name'});
            }
        }
    }
    return implode(' & ',$art);
}

function close_player() {
	return true;
}

?>
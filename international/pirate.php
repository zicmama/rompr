<?php

// The first term here is the name that will appear in the drop-down list
// This has the form $langname['file_name without .php extension'] = "Display Name";
// Try to name your file as the two-letter language code so RompR can pick a suitable
// default language automatically.

$langname['pirate'] = "Pirate";

$languages['pirate'] = array (

	// The Sources Chooser Button tooltips
	"button_local_music" => "Ye Onboard Shantys",
	"button_file_browser" => "Ye view of ye disc",
	"button_lastfm" => "Listen t' magic radio from t' red ball",
	"button_internet_radio" => "Ye radio from t'int'net",
	"button_albumart" => "Ye valuable paintings",

	// Tooltips for Buttons across the top of the information panel
	"button_togglesources" => "Hide t' panel o'sources",
	"button_back" => "Avast!",
	"button_history" => "'tis where ye olde things hide",
	"button_forward" => "Ahoy!",
	"button_toggleplaylist" => "Hide t' minstrel's tunes",

	// Tooltips for playlist buttons
	"button_prefs" => "Splice the mainbrace!",
	"button_clearplaylist" => "Hornpipe yer Bung hole",
	"button_loadplaylist" => "Throw it in t' hold!",
	"button_saveplaylist" => "Make it stick, me lad",

	// Tooltips for playback controls
	"button_previous" => "Avast!",
	"button_play" => "Party!",
	"button_stop" => "Shiver me timbers",
	"button_stopafter" => "I needs me sleep, finish up then throw 'im in t' brig",
	"button_next" => "Ahoy!",
	"button_love" => "'Tis a Beauty",
	"button_ban" => "'Tis a scurvy dog!",
	"button_volume" => "Ye minstrel's lungs",

	// Titles for drop-down menus
	"menu_history" => "OLD THINGS",
	"menu_config" => "YE WHEELHOUSE",
	"menu_clearplaylist" => "BURN T' MINSTRELS",
	"menu_saveplaylist" => "BURY IT AN' DRAW A MAP",
	"menu_playlists" => "MINSTREL's PROGRAMS",

	// Configuration menu entries
	"config_language" => "SPEAKS",
	"config_theme" => "YE COLOURS",
	"config_hidealbumlist" => "Bury t' list o' shantys",
	"config_keepsearch" => "...but keep ye telescope",
	"config_hidefileslist" => "Bury t' list o' files",
	"config_hidelastfm" => "Bury t' minstrels o' t' red ball",
	"config_hideradio" => "Bury t' wireless",
	"config_fullbio" => "Grab all t' red ball info",
	"config_lastfmlang" => "Ye Speakin' fer information",
	"config_lastfmdefault" => "T' Queen's English",
	"config_lastfminterface" => "What RompR Speaks",
	"config_lastfmbrowser" => "What Browser Speaks",
	"config_lastfmlanguser" => "Speak this tongue:",
	"config_langinfo" => "Queen's English be always the fallback",
	"config_autoscroll" => "Moving list o' minstrel",
	"config_autocovers" => "Steal ye valuable art",
	"config_musicfolders" => "Ye shantys be buried in t' location:",
	"config_crossfade" => "Slice 'em (seconds)",
	"config_clicklabel" => "How minstrel be'aves when whacked",
	"config_doubleclick" => "Whack 'im twice t' make 'im play",
	"config_singleclick" => "Whack 'im once",
	"config_sortbydate" => "List ye shantys by yearrr",
	"config_notvabydate" => "...but not fer t' groups o' minstrels",
	"config_dateinfo" => "Avast! Recheck yer shantys a'er adjusting yearrr settin's",
	"config_updateonstart" => "Check shantys afore settin' sail",
	"config_updatenow" => "Check shantys now",
	"config_rescan" => "Rewrite full list o' shantys",
	"config_editshortcuts" => "Ye dextrous cheats...",
	"config_audiooutputs" => "Ye makers o' noise...",
	"config_lastfmusername" => "Me name in t' red ball club",
	"config_loginbutton" => "Arrrrrr",
	"config_scrobbling" => "Avast! Scrobbling is witchcraft",
	"config_radioscrobbling" => "T' wireless be not scrobbled",
	"config_scrobblepercent" => "Afore ye scrobble, pipe this much shanty",
	"config_autocorrect" => "Ye red ball corrects ye",
	"config_tagloved" => "Ye beautys be marked wi'",
	"config_country" => "YER LUBBER (for t' red ball)",

	// Various buttons for the playlist dropdowns
	"button_imsure" => "Arrrrrrrrrr!",
	"button_save" => "Arrr",

	// General Labels
	"label_lastfm" => "Ye Magic Red Ball",
	"button_searchmusic" => "Look for treasure",
	"button_searchfiles" => "Look for treasure",
	"label_yourradio" => "Pirate Radio",
	"label_podcasts" => "Peg Legs",
	"label_somafm" => "Soma FM, yarrrrr",
	"label_bbcradio" => "Live BBC Wireless. Better than dead.",
	"label_icecast" => "Icecast Wireless",
	"label_emptyinfo" => "Here be t'information ye be lookin' for when t'minstrel cranks up 'is fiddle. Yarrrrrrrr!",
	"button_playlistcontrols" => "Minstrel Instructions",
	"button_shuffle" => "PEG LEG WALK",
	"button_crossfade" => "SLICE 'EM",
	"button_repeat" => "ETERNITY",
	"button_consume" => "DOWN YE GROG",
	"label_yes" => "Arrr",
	"label_no" => "Never!",
	"mopidy_down" => "Avast! Ye Mopidy be dead!",
	"label_updating" => "Diggin' fer shantys",
	"label_update_error" => "Avast! Ye shanty list be broken!",
	"label_notsupported" => "Ye canna do that, ye scurvy dog!",
	"label_playlisterror" => "Avast! 'Tis a broken ship, full o' holes!",
	"label_mpd_no" => "Avast! Ye must be playin' a shanty to do that",
	"label_downloading" => "Pillaging...",
	"button_OK" => "Arrr",
	"button_cancel" => "Avast!",
	"error_playlistname" => "Ye cannot use slashes, them's only fer cutlass work",
	"label_savedpl" => "Stored as %s",
	"label_loadingstations" => "Pillaging...",

	// Search Forms
	"label_searchfor" => "What ye seek?",
	"label_searching" => "Scanning t' scope",
	"button_search" => "Arrrrr",
	"label_searchresults" => "T' findings",
	"label_multiterms" => "Ye can use all o' these at once, if ye desires",
	"label_limitsearch" => "T' Specifics",
	"label_filesearch" => "Look in t'boxes fer",

	// General multipurpose labels
	"label_tracks" => "shantys",
	"label_albums" => "books o' shantys",
	"label_artists" => "minstrels",
	"label_track" => "Shanty",
	"label_album" => "Book o' shantys",
	"label_artist" => "Minstrel",
	"label_anything" => "Owt",
	"label_general_error" => "Avast! There be grog in the machinery",
	"label_days" => "transits o' t' sun",
	"label_hours" => "hours",
	"label_minutes" => "minutes",
	"label_noalbums" => "No Books' o' shantys found",
	"label_notracks" => "No shantys found",
	"label_duration" => "T' length",
	"label_playererror" => "Avast!",
	"label_internet_radio" => "T' wireless through t' wires",
	"label_tunefailed" => "Avast! T'wires be not workin'",
	"label_noneighbours" => "Ye lives too far away from anyone",
	"label_nofreinds" => "You have 0 freinds",

	// Playlist and Now Playing
	"label_waitingforstation" => "Seeking t' hidden names...",
	"label_notforradio" => "'Tis not for t' wireless",
	"label_incoming" => "Awaiting Salvo...",
	"label_addingtracks" => "Queuing Shantys",

	// Podcasts
	"podcast_rss_error" => "Avast! It did not work",
	"podcast_remove_error" => "Avast! It did not work",
	"podcast_general_error" => "Avast! It did not work",
	"podcast_entrybox" => "Ye needs an RSS fer t'make Peg Legs. Scribble it here",
	// Podcast tooltips
	"podcast_delete" => "Cut off this Peg Leg",
	"podcast_configure" => "Design this Peg Leg",
	"podcast_refresh" => "Give it a new coat o' paint",
	"podcast_download_all" => "Pillage all t'episodes",
	"podcast_mark_all" => "Mark All Episodes as Listened",
	// Podcast display options
	"podcast_display" => "Show Me",
	"podcast_display_all" => "T' Lot",
	"podcast_display_onlynew" => "Only New",
	"podcast_display_unlistened" => "New and Unlistened",
	"podcast_display_downloadnew" => "New and Pillaged",
	"podcast_display_downloaded" => "Only Pillaged",
	// Podcast refresh options
	"podcast_refresh" => "Repaint",
	"podcast_refresh_never" => "Only by my hand",
	"podcast_refresh_hourly" => "Hourly",
	"podcast_refresh_daily" => "Daily",
	"podcast_refresh_weekly" => "Weekly",
	"podcast_refresh_monthly" => "Monthly",
	// Podcast auto expire
	"podcast_expire" => "Keep Episodes For",
	"podcast_expire_tooltip" => "Any episodes older than this value will be removed from the list. Changes to this option will take effect next time you refresh the podcast",
	"podcast_expire_never" => "Ever",
	"podcast_expire_week" => "One Week",
	"podcast_expire_2week" => "Two Weeks",
	"podcast_expire_month" => "One Month",
	"podcast_expire_2month" => "Two Months",
	"podcast_expire_6month" => "Six Months",
	"podcast_expire_year" => "One Year",
	// Podcast number to keep
	"podcast_keep" => "Number To Keep",
	"podcast_keep_tooltip" => "The list will only ever show this many episodes. Changes to this option will take effect next time you refresh the podcast",
	"podcast_keep_0" => "All o' em!",
	// Podcast other options
	"podcast_keep_downloaded" => "Keep all pillaged episodes",
	"podcast_kd_tooltip" => "Enable this option to keep all pillaged episodes. The above two options will then only apply to episodes that have not been pillaged",
	"podcast_auto_download" => "Automatically Pillage New Episodes",
	"podcast_tooltip_new" => "This be a new episode",
	"podcast_tooltip_notnew" => "This episode be not new but 't has not been listened to",
	"podcast_tooltip_downloaded" => "This episode has been pillaged",
	"podcast_tooltip_download" => "Pillage this episode",
	"podcast_tooltip_mark" => "Mark as listened",
	"podcast_tooltip_delepisode" => "Burn this episode to ashes",
	"podcast_expired" => "This episode has expired",
	// eg 2 days left to listen
	"podcast_timeleft" => "%s left to listen",


	// Last.FM Chooser Panel
	// Title - %s will be replaced with the value of label_lastfm
	"label_lastfmradio" => "%s wireless o' yer own",
	// Radio Stations %s will be replaced by the Last.FM User Name
	"label_userlibrary" => "Ye shanty library for %s",
	"label_usermix" => "Ye mix of old and new for %s",
	"label_userrecommended" => "What t' red ball thinks %s should be listenin' to",
	"label_neighbourhood" => "What t' other cap'ns are listenin' to",
	"label_toptags" => "Ye most used marks o' cap'n %s",
	"label_topartists" => "Ye most regarded minstrels o' cap'n %s",
	// Loved stations tag radio. %s will be replaced with the value of the
	// config item for 'Tag Loved Tracks With'
	"label_lovedtagradio" => "Ye Beauties marked wi' ye sign o' '%s'",
	// Label for radio station text entry boxes. %s will be replced with
	// the value of label_lastfm
	"label_artistradio" => "Music o' minstrels from %s",
	"label_fanradio" => "Admirers o' a minstrel from %s",
	"label_tagradio" => "Shantys from %s wi ye mark o'",
	"label_freinds" => "Cap'n %s's trusted cutlass bearers",
	"label_neighbours" => "Cap'n %s's piratical associates",
	"button_playradio" => "Arrrrr",
	"label_notloggedin" => "Avast! Ye must cross the palm of %s to listen to %s minstrels",
	"label_notloggedin2" => "%s may not travel for a lubber like you",

	// Soma FM Chooser Panel
	"label_soma" => "Soma.FM is a listener supported commercial-free radio station from San Francisco, which be somewhere o'er t'horizon",
	"label_soma_beg" => "Arrr! He be a good man, if ye likes him, gi 'im some dubloons",

	// Your radio stations
	"label_radioinput" => "T' magic scroll fer the music must be placed 'ere",

	//Album Art Manager
	"albumart_title" => "Ye Valuable Paintings",
	"albumart_getmissing" => "Pillage Ye Missing Artwork",
	"albumart_showall" => "Reveal all ye paintings",
	"albumart_instructions" => "Work it out for yersel, or clamber the gibbet",
	"albumart_onlyempty" => "Reveal only ye missing paintings",
	"albumart_allartists" => "All Minstrels",
	"albumart_unused" => "Ye wastes of grog",
	"albumart_deleting" => "Cutlassing to death...",
	"albumart_error" => "Scuppered!",
	"albumart_googlesearch" => "Ask Cap'n Google",
	"albumart_local" => "Art In the Shanty Store",
	"albumart_upload" => "Black Magic",
	"albumart_uploadbutton" => "Arrrrrr",
	"albumart_newtab" => "Cap'n Google over there",
	"albumart_dragdrop" => "Drop and Drag. Drag and Drop. That's t' new-fangled way.",
	"albumart_showmore" => "Not Enough!",
	"albumart_googleproblem" => "Avast! Cap'n Google replies",
	"albumart_getthese" => "Pillage These Paintings",
	"albumart_deletethese" => "Burn This Evidence",
	"albumart_nocollection" => "Arrrr, ye scurvy dog, create a collection o' shantys before comin' in here",
	"albumart_nocovercount" => "shantys wi'out a painting",
	"albumart_getting" => "Pillaging",

	// Setup page (rompr/?setup)
	"setup_connectfail" => "Avast! No port could be found for t' ship",
	"setup_connecterror" => "The port will not allow us to harbour, t' master said : ",
	"setup_request" => "Scurvy Dog! What ye be doin' in here?",
	"setup_labeladdresses" => "Ye must provide t' secrets to get t' treasure",
	"setup_addressnote" => "Note: Yer a scurvy dog",
	"setup_ipaddress" => "IP Address or hostname",
	"setup_port" => "Port",
	"setup_advanced" => "Options fer those wi' knowledge",
	"setup_leaveblank" => "Scurvy dogs should fear to enter here",
	"setup_password" => "Password",
	"setup_unixsocket" => "UNIX-domain socket",
	"setup_mopidy" => "Mopidy-specific Settings",
	"setup_mopidyport" => "Mopidy HTTP port:",
	"setup_debug" => "Enable Capn's Log",

	// Intro Window
	"intro_title" => "Yarrrrrrrrrrrrr!",
	"intro_welcome" => "This be RompR and its number be",
	"intro_viewingmobile" => "'Tis the version for yer hand. T' version for yer cap'ns table is",
	"intro_viewmobile" => "T' version fer yer hand is",
	"intro_basicmanual" => "T' instructions be hidden at",
	"intro_forum" => "T' grog shop be at",
	"intro_mopidy" => "IMPORTANT! If ye be a Mopidyist",
	// The %s in this next line make a hypertext link
	"intro_mopidywiki" => "%sRead the Wiki%s, ye scurvy dog!",
	"intro_mopidyversion" => "Mopidy %s be a necessity fer this voyage",

	// Last.FM
	"label_loved" => "'Tis a beauty:",
	"label_lovefailed" => "Failed To Make Love",
	"label_unloved" => "Called it a scurvy dog:",
	"label_unlovefailed" => "Failed To Remove Love",

	// Info Panel
	"info_gettinginfo" => "Pillaging...",
	"info_clicktoshow" => "REVEAL",
	"info_clicktohide" => "BURY",

	// File Info panel
	"button_fileinfo" => "Info Panel (File Information)",
	"info_file" => "File:",
	"info_from_beets" => "(from beets server)",
	"info_format" => "Format:",
	"info_bitrate" => "Bitrate:",
	"info_samplerate" => "Sample Rate:",
	"info_mono" => "Mono",
	"info_stereo" => "Stereo",
	"info_channels" => "Channels",
	"info_date" => "Date:",
	"info_genre" => "Genre:",
	"info_performers" => "Minstrels:",
	"info_composers" => "Ye Writer:",
	"info_comment" => "Arrrrrrr:",
	"info_label" => "Label:",
	"info_disctitle" => "Disc Title:",
	"info_encoder" => "Magic Squasher:",
	"info_year" => "Yearrrrr:",

	// Last.FM Info Panel
	"button_infolastfm" => "Info Panel (Last.FM)",
	"label_notrackinfo" => "Avast! Ye shanty could not be found!",
	"label_noalbuminfo" => "Avast! Ye Book o' shantys could not be found",
	"label_noartistinfo" => "Avast! Ye Minstrel could not be found",
	"lastfm_listeners" => "Audience:",
	"lastfm_plays" => "Plays:",
	"lastfm_yourplays" => "Your Plays:",
	"lastfm_toptags" => "YE TOP MARKINGS:",
	"lastfm_tagradiotooltip" => "Play %s Wireless",
	"lastfm_readfullbio" => "Read Full Biography",
	"lastfm_addtags" => "ADD MARKINGS",
	"lastfm_addtagslabel" => "Add ye markings, separate wi' ye comma",
	"button_add" => "ARRRR",
	"lastfm_yourtags" => "YER MARKINGS:",
	"lastfm_buyoncd" => "BUY ON SILVER PLATTER:",
	"lastfm_download" => "PILLAGE (for Dubloons):",
	"lastfm_similarradio" => "Hear minstrels like %s",
	"lastfm_radio_fan" => "Play what ye admirers o' %s are listenin' to",
	"lastfm_simar" => "Minstrels Who Sounds A Bit Like This 'Un",
	"lastfm_removetag" => "Scupper Ye Marking",
	"lastfm_buyalbum" => "EXCHANGE DUBLOONS",
	"lastfm_releasedate" => "When 'twas made",
	"lastfm_viewtrack" => "View track on Last.FM",
	"lastfm_playsample" => "Play Sample",
	"lastfm_playtrack" => "Play Shanty",
	"lastfm_buytrack" => "EXCHANGE DUBLOONS",
	"lastfm_tagerror" => "Failed to modify markings",
	"lastfm_loved" => "'Tis A Beauty",
	"lastfm_lovethis" => "Put markings of a Beauty on this shanty",
	"lastfm_unlove" => "Call this shanty a scurvy land lubber",
	"lastfm_notfound" => "%s Not Found",
	"lastfm_nobio" => "No full biography available",

	// Lyrics info panel
	"button_lyrics" => "Info Panel (Lyrics)",
	"lyrics_lyrics" => "Ye Words",
	"lyrics_nonefound" => "No words are known",
	"lyrics_info" => "Ye minstrel, 'e speaks only gibberish",

	// For Discogs/Musicbrainz release tables. Label in this context means record label
	// These are all section headers and so should all be UPPER CASE, unless there's a good linguistic
	// reason not to do that
	"title_year" => "YEAR",
	"title_title" => "TITLE",
	"title_artist" => "MINSTREL",
	"title_type" => "TYPE",
	"title_label" => "YE PUBLISHER",
	"label_pages" => "PAGES",

	// For discogs/musicbrains album info. discogs_companies means the companies involved in producing the album
	// These are all section headers and so should all be UPPER CASE, unless there's a good linguistic
	// reason not to do that
	"discogs_companies" => "COMP'NIES",
	"discogs_personnel" => "YE SAILORS RESPONSIBLE",
	"discogs_videos" => "YE MOVIN' PICTURES",
	"discogs_styles" => "STYLES",
	"discogs_genres" => "GENRES",
	"discogs_tracklisting" => "SHANTY LISTIN'",
	"discogs_realname" => "REAL NAME:",
	"discogs_aliases" => "ALIASES:",
	"discogs_alsoknown" => "ALSO KNOWN AS:",
	"discogs_external" => "TRADE ROUTES",
	"discogs_bandmembers" => "PEOPLE IN T' GROUP",
	"discogs_memberof" => "THIS PERSON BE ALLIED WI'",
	"discogs_discography" => "%s HAS MADE THESE SHANTYS:",

	// Discogs
	"button_discogs" => "Info Panel (Discogs)",
	"discogs_error" => "Avast! Somethin' is amiss in t' wires",
	"discogs_nonsense" => "Ye Discogs speaks nonsense",
	"discogs_noalbum" => "Couldn't find this book o' shantys on Discogs",
	"discogs_notrack" => "Couldn't find this shanty on Discogs",
	"discogs_slideshow" => "Painting Gallery",

	// Musicbrainz
	"button_musicbrainz" => "Info Panel (Musicbrainz)",
	"musicbrainz_error" => "Ye Musicbrainz be no speakin'",
	"musicbrainz_contacterror" => "Avast! It not be workin'",
	"musicbrainz_noartist" => "This Minstrel si not on Musicbrainz",
	"musicbrainz_noalbum" => "This book o' shantys is not on Musicbrainz",
	"musicbrainz_notrack" => "This shanty is not on Musicbrainz",
	"musicbrainz_noinfo" => "Ye Musicbrainz be no speakin'",
	// This is used for date ranges -  eg 2005 - Present
	"musicbrainz_now" => "T'Day",
	"musicbrainz_origin" => "ORIGIN",
	"musicbrainz_active" => "ACTIVE",
	"musicbrainz_rating" => "RATING",
	"musicbrainz_notes" => "NOTES",
	"musicbrainz_tags" => "MARKINGS",
	"musicbrainz_externaldiscography" => "Discography (%s)",
	"musicbrainz_officalhomepage" => "Official Homepage (%s)",
	"musicbrainz_fansite" => "Ye Site fer Admirers (%s)",
	"musicbrainz_lyrics" => "Ye words (%s)",
	"musicbrainz_social" => "Misanthropy",
	"musicbrainz_microblog" => "Microblog",
	"musicbrainz_review" => "Review (%s)",
	"musicbrainz_novotes" => "(No Votes)",
	// eg: 3/5 from 15 votes
	"musicbrainz_votes" => "%s/5 from %s votes",
	"musicbrainz_appears" => "THIS SHANTY APPEARS ON",
	"musicbrainz_credits" => "YE SAILORS WHO MADE IT",
	"musicbrainz_status" => "STATUS",
	"musicbrainz_date" => "DATE",
	"musicbrainz_country" => "COUNTRY",
	"musicbrainz_disc" => "DISC",

	// SoundCloud info panel
	"button_soundcloud" => "Info Panel (SoundCloud)",
	"soundcloud_trackinfo" => "Shanty Info",
	"soundcloud_plays" => "Plays",
	"soundcloud_downloads" => "Pillages",
	"soundcloud_faves" => "People Who Admire It",
	// State means eg State: Finished or State: Unfinished
	"soundcloud_state" => "State",
	"soundcloud_license" => "License",
	"soundcloud_buy" => "Exchange Dubloons",
	"soundcloud_view" => "View on SoundCloud",
	"soundcloud_user" => "Ye Cap'n",
	"soundcloud_fullname" => "Full Name",
	"soundcloud_Country" => "Country",
	"soundcloud_city" => "City",
	"soundcloud_website" => "Visit Website",
	"soundcloud_not" => "Avast! Ye is not listenin' to SoundCloud",

	// Wikipedia Info Panel
	"button_wikipedia" => "Info Panel (Wikipedia)",
	"wiki_nothing" => "Ye Wikipedia be not respondin'",
	"wiki_fail" => "Ye Wikipedia hath no scroll relatin' to '%s'",
	"wiki_suggest" => "Ye Wikipedia hath no scroll relatin' to '%s'",
	"wiki_suggest2" => "He suggests you go t' these places",

	// Keybindings editor
	"title_keybindings" => "Dextrous Cheats",
	"button_volup" => "Make Minstrel Louder",
	"button_voldown" => "Make Minstrel Softer",


);

?>
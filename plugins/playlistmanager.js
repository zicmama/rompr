var playlistManager = function() {

	var pmg = null;
	var holders = new Array();

	function putTracks(holder, tracks, title) {
		var html = '<input type="hidden" value="'+title+'">';
		html += '<table align="center" style="border-collapse:collapse;width:96%';
		if (tracks.length > 0 && tracks[0].plimage != "") {
			debug.log("PLAYLISTMANAGER",title,"has a background image of",tracks[0].plimage);
			html += ';background-image:url(\''+tracks[0].plimage+'\');background-size:contain;background-repeat:no-repeat'
		}
		html += '">'+
		'<tr class="tagh"><th colspan="2" align="center">'+decodeURIComponent(title)+'</th>'+
		'<th width="20px"><i class="icon-floppy playlisticon clickicon infoclick plugclickable clickrenplaylist"></i></th>'+
		'<th width="20px"><i class="icon-cancel-circled playlisticon clickicon infoclick plugclickable clickdelplaylist"></i></th></tr>';
		if (tracks.length == 0) {
			// Add a blank entry so we've got something to drop onto. Also the dropping doesn't work
			// without at least one sortable in the target.
			// html += '<tr class="sortable" name="playmanitem_0"><td style="height:24px"></td></tr>';
			html += '<tr class="sortable" name="dummy" romprpos="playmanitem_0"><td style="height:24px"></td></tr>';
		} else {
			for (var i in tracks) {
				html += '<tr class="sortable draggable infoclick clickable clicktrack" name="'+tracks[i].Uri+'" romprpos="playmanitem_'+i+'"><td width="40px"><img class="smallcover';
				if (tracks[i].Image) {
					html += '" src="'+tracks[i].Image;
				} else {
					html += ' notfound';
				}
				html += '" /></td><td colspan="2" class="dan"><b>'+tracks[i].Title+'</b><br><i>by</i> <b>'+tracks[i].Artist+
					'</b><br><i>on</i> <b>'+tracks[i].Album+'</b></td>';
				html += '<td class="dogsticks" align="center" style="vertical-align:middle"><i class="icon-cancel-circled playlisticon clickicon infoclick plugclickable clickremplay" name="'+tracks[i].pos+'"></i></td></tr>';
			}
		}
		html += '</table>';
		holder.html(html);
	}

	function reloadPlaylist(list) {
        $.ajax({
        	url: 'plugins/playlistmanager.php',
        	type: "POST",
        	data: {action: 'getlist'},
        	dataType: 'json',
        	success: function(data) {
        		putTracks(holders[list], data[list], list);
        		browser.rePoint();
	            infobar.markCurrentTrack();
        	},
        	error: function() {
        		infobar.notify(infobar.ERROR, "Failed to remove track");
        	}
        });

	}

	function getAllPlaylists() {
        $.ajax({
        	url: 'plugins/playlistmanager.php',
        	type: "POST",
        	data: {action: 'getlist'},
        	dataType: 'json',
        	success: function(data) {
        		playlistManager.doMainLayout(data);
        	},
        	error: function() {
        		infobar.notify(infobar.ERROR, "Failed to get Playlists");
        		pmg.slideToggle('fast');
        	}
        });
	}

	return {

		open: function() {

        	if (pmg == null) {
	        	pmg = browser.registerExtraPlugin("pmg", language.gettext("label_playlistmanager"), playlistManager);

	        	$("#pmgfoldup").append('<div class="containerbox padright">'+
	        		'<div class="expand"><b>'+language.gettext("label_playlistmanagertop")+'</b></div>'+
	        		'</div>');

    			$("#pmgfoldup").append('<div class="containerbox padright noselection">'+
        			'<div class="expand">'+
            		'<input class="enter inbrowser" name="newplaylistnameinput" type="text" />'+
        			'</div>'+
					'<button class="fixed" onclick="playlistManager.createPlaylist()">'+language.gettext("button_createplaylist")+'</button>'+
    				'</div>');

			    $("#pmgfoldup").append('<div class="noselection fullwidth masonified" id="playmunger"></div>');
			    getAllPlaylists();
	            $('#pmgfoldup .enter').keyup(onKeyUp);
	        } else {
	        	browser.goToPlugin("pmg");
	        }
		},

		doMainLayout: function(data) {
			debug.log("PLAYLISTMANAGER","Got data",data);
			for (var i in data) {
				debug.log("PLAYLISTMANAGER",i);
				holders[i] = $('<div>', {class: 'tagholder selecotron noselection'}).appendTo($("#playmunger"));
				putTracks(holders[i], data[i], i);
				holders[i].acceptDroppedTracks({
					scroll: true,
					scrollparent: '#infopane'
				});
				holders[i].sortableTrackList({
					items: '.sortable',
					outsidedrop: playlistManager.dropped,
					insidedrop: playlistManager.dragstopped,
					scroll: true,
					allowdragout: true,
					scrollparent: '#infopane',
					scrollspeed: 80,
					scrollzone: 120
				});
			}
            pmg.slideToggle('fast', function() {
	            $("#playmunger").masonry({
	            	itemSelector: '.tagholder',
	            	gutter: 0
	            });
	          	cement = true;
	        	browser.goToPlugin("pmg");
	            browser.rePoint();
	            infobar.markCurrentTrack();
            });
		},

		handleClick: function(element, event) {
			if (element.hasClass('clickremplay')) {
		        var list = element.parent().parent().parent().parent().parent().children('input').first().val();
		        var pos = element.attr('romprpos');
		        debug.log("PLAYLISTMANAGER","Removing Track",pos,"from playlist",list);
		        player.controller.deletePlaylistTrack(list,pos, function() {
		        	reloadPlaylist(list);
		        	player.controller.reloadPlaylists();
		        });
			} else if (element.hasClass('clickdelplaylist')) {
		        var list = element.parent().parent().parent().parent().prev().val();
		        var holder = element.parent().parent().parent().parent().parent();
		        debug.log("PLAYLISTMANAGER","Deleting Playlist",list);
		        player.controller.deletePlaylist(list,function() {
		        	player.controller.reloadPlaylists();
		        	holder.fadeOut('fast', function() {
			        	$("#playmunger").masonry('remove',holder);
			        	browser.rePoint();
		        	});
		        });
			} else if (element.hasClass('clickrenplaylist')) {
		        var list = unescapeHtml(element.parent().parent().parent().parent().prev().val());
		        player.controller.renamePlaylist(list, event);
			}
		},

		checkToUpdateTheThing: function(list) {
			// Callback to handle case where track is removed from a playlist via the playlists list
			if (pmg !== null) {
				reloadPlaylist(list);
			}
		},

		dropped: function(event, ui) {
	        event.stopImmediatePropagation();
	        var tracks = new Array();
	        var playlist = ui.parent().parent().parent().children('input').first().val();
	        $.each($('.selected').filter(removeOpenItems), function (index, element) {
	        	if ($(element).hasClass('directory')) {
	        		var uri = decodeURIComponent($(element).children('input').first().attr('name'));
	        		debug.log("PLAYLISTMANAGER","Dragged Directory",uri,"to",playlist);
	        		tracks.push({dir: uri});
	        	} else {
		        	var uri = decodeURIComponent($(element).attr("name"));
		        	debug.log("PLAYLISTMANAGER","Dragged",uri,"to",playlist);
		        	tracks.push({uri: uri});
		        }
	        });
	        $('.selected').removeClass('selected');
	        var moveto = null;
	        var playlistlength = null;
	        var next = ui.next('.sortable').attr('romprpos');
	        if (next) {
	        	debug.log("PLAYLISTMANAGER","Next Item Is",next);
	        	next = next.replace(/playmanitem_/, '');
	        	moveto = next;
	        	playlistlength = ui.parent().children('.sortable').last().attr('romprpos');
	        	if (playlistlength) {
	        		playlistlength = parseInt(playlistlength.replace(/playmanitem_/,''));
	        		playlistlength += 1;
	        	}
	        }
	        if (tracks.length > 0) {
	        	debug.log("PLAYLISTMANAGER","Dragged to position",moveto);
		        player.controller.addTracksToPlaylist(playlist,tracks,moveto,playlistlength,function() {
		        	reloadPlaylist(playlist);
		        	player.controller.checkProgress();
		        	player.controller.reloadPlaylists();
		        });
		    }
		},

		close: function() {
			pmg = null;
			holders = [];
			cement = false;
		},

		reloadAll: function() {
			if (pmg) {
				$("#playmunger").masonry('destroy');
				$("#playmunger").empty();
				holders = [];
				pmg.hide();
				getAllPlaylists();
			}
		},

		dragstopped: function(event, ui) {
	        event.stopImmediatePropagation();
			var playlist = ui.parent().parent().parent().children('input').val();
			var item = ui.attr('romprpos');
			item = item.replace(/playmanitem_/,'');
			var next = ui.next().attr('romprpos');
			if (typeof next == "undefined") {
				next = ui.prev().attr('romprpos');
			}
			next = next.replace(/playmanitem_/,'');
			debug.log("PLAYLISTMANAGER","Dragged item",item,"to position",next,"within playlist",playlist);
			// Oooh it's daft but the position we have to send is the position AFTER the track has been
			// taken out of the list but before it's been put back in.
			if (next > item) next--;
			player.controller.movePlaylistTracks(playlist,item,next,function() {
	        	reloadPlaylist(playlist);
	        	player.controller.checkProgress();
	        	player.controller.reloadPlaylists();
			});
		},

		createPlaylist: function() {
			// We don't need to actually create the playlist at the mpd end because
			// mpd will create it automatically if we add a track to it. And what's the point
			// of an empty playlist?
			var playlist = rawurlencode($('[name=newplaylistnameinput]').val());
			holders[playlist] = $('<div>', {class: 'tagholder selecotron noselection'}).prependTo($("#playmunger"));
			putTracks(holders[playlist],[],playlist);
			holders[playlist].acceptDroppedTracks({
				scroll: true,
				scrollparent: '#infopane'
			});
			holders[playlist].sortableTrackList({
				items: '.sortable',
				outsidedrop: playlistManager.dropped,
				insidedrop: playlistManager.dragstopped,
				scroll: true,
				allowdragout: true,
				scrollparent: '#infopane',
				scrollspeed: 80,
				scrollzone: 40
			});
			$("#playmunger").masonry('prepended', holders[playlist]);
			browser.rePoint();
		}

	}

}();

pluginManager.addPlugin(language.gettext("label_playlistmanager"), playlistManager.open, null);

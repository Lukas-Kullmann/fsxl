document.open();
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#versio n=9,0,0,0" width="'+width+'" height="'+height+'">');
document.write('<param name="allowScriptAccess" value="sameDomain" />');
document.write('<param name="allowFullScreen" value="true" />');
document.write('<param name="movie" value="inc/frogplayer.swf?video='+video+'&color='+color+'&display='+style+'" />');
document.write('<param name="quality" value="high" />');
document.write('<param name="bgcolor" value="#000000" />');
document.write('<embed src="inc/frogplayer.swf?video='+video+'&color='+color+'&display='+style+'" quality="high" bgcolor="#000000" width="'+width+'" height="'+height+'" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />');
document.write('</object>');
document.close();
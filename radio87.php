<?php
/*
Plugin Name: Lecteur audio RADIO87
Plugin URI: http://www.radio87.fr/
Description: Ce plugin affiche un lecteur audio en flash RADIO87. Pour activer le player, tapez simplement " [RADIO87PL] ".
Version: 0.1
Author: Jules
Author URI: http://www.radio87.fr/
License: GPL2
*/


function radio87player() {
return '<p><object type="application/x-shockwave-flash" data="http://www.radio87.fr/template/player_audio/player.swf" width="222" height="22"><param name="movie" value="http://www.radio87.fr/template/player_audio/player.swf"><param name="bgcolor" value="#ffffff"><param name="FlashVars" value="mp3=http://www.radio87.fr/podcasts/staff/INTR00.mp3|http://live2.radio87.fr|http://live.radio87.fr&amp;width=222&amp;height=22&amp;autoplay=1&amp;showvolume=1&amp;volume=100&amp;showlist=0&amp;showslider=1&amp;bgcolor=FFFFFF&amp;bgcolor1=000000&amp;loadingcolor=FFFFFF&amp;buttoncolor=FFFFFF&amp;buttonovercolor=FF0000&amp;slidercolor1=FFFFFF&amp;sliderovercolor=FFFFFF&amp;textcolor=FFFFFF"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em><br></object></p>';
}
add_shortcode('RADIO87PL', 'radio87player');


function radio87playerad() {
return '<p><object type="application/x-shockwave-flash" data="http://www.radio87.fr/template/player_audio/player.swf" width="222" height="22"><param name="movie" value="http://www.radio87.fr/template/player_audio/player.swf"><param name="bgcolor" value="#ffffff"><param name="FlashVars" value="mp3=http://www.radio87.fr/podcasts/staff/INTR00.mp3|http://live2.radio87.fr|http://live.radio87.fr&amp;width=222&amp;height=22&amp;autoplay=0&amp;showvolume=1&amp;volume=100&amp;showlist=0&amp;showslider=1&amp;bgcolor=FFFFFF&amp;bgcolor1=000000&amp;loadingcolor=FFFFFF&amp;buttoncolor=FFFFFF&amp;buttonovercolor=FF0000&amp;slidercolor1=FFFFFF&amp;sliderovercolor=FFFFFF&amp;textcolor=FFFFFF"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em><br></object></p>';
}
add_shortcode('RADIO87PLAD', 'radio87playerad');


function radio87player2() {
return '<p><audio controls="controls" autoplay="autoplay"><source src="http://live2.radio87.fr" type="audio/mp3"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em><br></audio></p>';
}
add_shortcode('RADIO87PL2', 'radio87player2');


function radio87player2ad() {
return '<p><audio controls="controls"><source src="http://live2.radio87.fr" type="audio/mp3"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em><br></audio></p>';
}
add_shortcode('RADIO87PL2AD', 'radio87player2ad');


function radio87currenttitle() {
return '<p><iframe name="radio87-currenttitle" src="http://www.radio87.fr/live2/titre_en_cours/intro.html" style="width:211px;height:222px;border-bottom-left-radius:11px;border-top-right-radius:11px;" scrolling="auto" frameborder="0"></iframe></p>';
}
add_shortcode('RADIO87CT', 'radio87currenttitle');


function radio87tracklist() {
return '<p><a href="http://www.radio87.fr/live2/tracklist/" target="_blank" title="RADIO87 - Tracklist">Voir les derniers titres diffusés sur RADIO87</a></p>';
}
add_shortcode('RADIO87TR', 'radio87tracklist');

?>

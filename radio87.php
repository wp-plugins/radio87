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
return '<object type="application/x-shockwave-flash" data="http://www.radio87.fr/template/player_audio/player.swf" width="222" height="22"><param name="movie" value="http://www.radio87.fr/template/player_audio/player.swf"><param name="bgcolor" value="#ffffff"><param name="FlashVars" value="mp3=http://www.radio87.fr/podcasts/staff/INTR00.mp3|http://live2.radio87.fr|http://live.radio87.fr&amp;width=222&amp;height=22&amp;autoplay=1&amp;showvolume=1&amp;volume=100&amp;showlist=0&amp;showslider=1&amp;bgcolor=FFFFFF&amp;bgcolor1=000000&amp;loadingcolor=FFFFFF&amp;buttoncolor=FFFFFF&amp;buttonovercolor=FF0000&amp;slidercolor1=FFFFFF&amp;sliderovercolor=FFFFFF&amp;textcolor=FFFFFF"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em><br></object>';
}
add_shortcode( 'RADIO87PL', 'radio87player' );

?>

<?php
/*
Plugin Name: Lecteur audio RADIO87
Plugin URI: http://www.radio87.fr/
Description: Ce plugin affiche un lecteur audio en flash / html5 RADIO87. Pour activer le player, tapez simplement " [RADIO87PLAUTO] ".
Version: 0.3
Author: Jules
Author URI: http://www.radio87.fr/
License: GPL2
*/


function radio87playerauto() {
return '<p><iframe name="radio87playerauto" src="' . plugins_url( 'auto.html', __FILE__ ) . '" style="width:333px;height:66px;border:none;" frameborder="0" scrolling="auto"></iframe></p>';
}
add_shortcode('RADIO87PLAUTO', 'radio87playerauto');


function radio87player() {
return '<p><span style="font-size:18px;">Vous écoutez <a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87</a></span><br><object type="application/x-shockwave-flash" data="http://www.radio87.fr/template/player_audio/player.swf" height="22" width="222"><param name="movie" value="http://www.radio87.fr/template/player_audio/player.swf"><param name="bgcolor" value="#ffffff"><param name="FlashVars" value="mp3=http://www.radio87.fr/podcasts/staff/INTR00.mp3|http://live2.radio87.fr|http://live.radio87.fr&amp;width=222&amp;height=22&amp;autoplay=1&amp;showvolume=1&amp;volume=100&amp;showlist=0&amp;showslider=1&amp;bgcolor=FFFFFF&amp;bgcolor1=000000&amp;loadingcolor=FFFFFF&amp;buttoncolor=FFFFFF&amp;buttonovercolor=FF0000&amp;slidercolor1=FFFFFF&amp;sliderovercolor=FFFFFF&amp;textcolor=FFFFFF"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em></object></p>';
}
add_shortcode('RADIO87PL', 'radio87player');


function radio87playerad() {
return '<p><span style="font-size:18px;">Vous écoutez <a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87</a></span><br><object type="application/x-shockwave-flash" data="http://www.radio87.fr/template/player_audio/player.swf" height="22" width="222"><param name="movie" value="http://www.radio87.fr/template/player_audio/player.swf"><param name="bgcolor" value="#ffffff"><param name="FlashVars" value="mp3=http://www.radio87.fr/podcasts/staff/INTR00.mp3|http://live2.radio87.fr|http://live.radio87.fr&amp;width=222&amp;height=22&amp;autoplay=0&amp;showvolume=1&amp;volume=100&amp;showlist=0&amp;showslider=1&amp;bgcolor=FFFFFF&amp;bgcolor1=000000&amp;loadingcolor=FFFFFF&amp;buttoncolor=FFFFFF&amp;buttonovercolor=FF0000&amp;slidercolor1=FFFFFF&amp;sliderovercolor=FFFFFF&amp;textcolor=FFFFFF"><em>[ Le lecteur audio ne s\'affiche pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em></object></p>';
}
add_shortcode('RADIO87PLAD', 'radio87playerad');


function radio87player2() {
return '<p><div id="playlistR87"><span style="font-size:18px;">Vous écoutez <a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87</a></span><br><audio controls="controls" autoplay="autoplay"><em>[ Le lecteur audio ne s\'affiche pas pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em></audio></div><script type="text/javascript" src="http://www.radio87.fr/player/PLAYLIST.js"></script></p>';
}
add_shortcode('RADIO87PL2', 'radio87player2');


function radio87player2ad() {
return '<p><div id="playlistR872"><span style="font-size:18px;">Vous écoutez <a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87</a></span><br><audio controls="controls"><em>[ Le lecteur audio ne s\'affiche pas pas sur votre navigateur, écoutez RADIO87 sur <a href="http://www.radio87.fr/">www.radio87.fr</a> ]</em></audio></div><script type="text/javascript" src="http://www.radio87.fr/player/PLAYLIST2.js"></script></p>';
}
add_shortcode('RADIO87PL2AD', 'radio87player2ad');


function radio87playerext() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/player/" target="_blank" title="RADIO87 - www.radio87.fr">Ecouter RADIO87.FR</a></p>';
}
add_shortcode('RADIO87PLEXT', 'radio87playerext');


function radio87currenttitle() {
return '<p><iframe name="radio87-currenttitle" src="http://www.radio87.fr/live2/titre_en_cours/intro.html" style="width:211px;height:222px;border-bottom-left-radius:11px;border-top-right-radius:11px;" scrolling="auto" frameborder="0"></iframe></p>';
}
add_shortcode('RADIO87CT', 'radio87currenttitle');


function radio87tracklist() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/live2/tracklist/" target="_blank" title="RADIO87 - Tracklist">Voir les derniers titres diffusés sur RADIO87.FR</a></p>';
}
add_shortcode('RADIO87TR', 'radio87tracklist');


function radio87localtime() {
return '<p><iframe name="radio87-localtime" src="http://www.radio87.fr/player/heure.php" style="width:144px;height:18px;border:none;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87HR', 'radio87localtime');


function radio87emissions() {
return '<p><iframe name="radio87emissions" src="' . plugins_url( 'emissions.html', __FILE__ ) . '" style="width:522px;height:522px;border:none;" frameborder="0" scrolling="auto"></iframe></p>';
}
add_shortcode('RADIO87EMISSIONS', 'radio87emissions');


function radio87youpi() {
return '<p><iframe name="radio87youpi" src="' . plugins_url( 'youpi.html', __FILE__ ) . '" style="width:333px;height:66px;border:none;" frameborder="0" scrolling="auto"></iframe></p>';
}
add_shortcode('RADIO87YOUPI', 'radio87youpi');


function radio87podcasts() {
return '<p><input type="button" value="Les podcasts de RADIO87.FR" title="Les podcasts de RADIO87.FR" onclick="window.open(\'http://www.radio87.fr/podcasts/\', \'_blank\')" style="font-family:Arial;font-size:14px;font-weight:bold;color:#FFFFFF;background-color:#FF0000;border-radius:6px;"></p>';
}
add_shortcode('RADIO87PODCASTS', 'radio87podcasts');


function radio87facebook() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87.FR</a> &nbsp;<iframe name="facebook-radio87" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FRADIO87.fr&amp;send=false&amp;layout=button_count&amp;width=288&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=22" style="width:288px;height:22px;border:none;vertical-align:middle;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87FACEBOOK', 'radio87facebook');


function radio87twitter() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87.FR</a> &nbsp;<iframe name="twitter-radio87" src="http://platform.twitter.com/widgets/follow_button.html?screen_name=iciradio87&amp;show_count=true&amp;lang=fr" style="width:288px;height:22px;border:none;vertical-align:middle;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87TWITTER', 'radio87twitter');


function radio87tumblr() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87.FR</a> &nbsp;<iframe name="tumblr-radio87" src="http://platform.tumblr.com/v1/follow_button.html?button_type=1&amp;tumblelog=iciradio87&amp;color_scheme=dark" style="width:288px;height:22px;border:none;vertical-align:middle;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87TUMBLR', 'radio87tumblr');


function radio87weibo() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87.FR</a> &nbsp;<iframe name="weibo-radio87" src="http://www.radio87.fr/v2/weibo.html" style="width:288px;height:22px;border:none;vertical-align:middle;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87WEIBO', 'radio87weibo');


function radio87messager() {
return '<p><a style="font-size:18px;" href="http://www.radio87.fr/" title="RADIO87 - www.radio87.fr">RADIO87.FR</a> &nbsp;<iframe name="minis-messages-radio87" src="http://www.radio87.fr/messager/minis-messages.php" style="width:288px;height:22px;border:none;vertical-align:middle;" frameborder="0" scrolling="no"></iframe></p>';
}
add_shortcode('RADIO87MESSAGER', 'radio87messager');


function radio87hashtagtwitter() {
return '<p><a style="font-size:18px;" href="https://twitter.com/hashtag/RADIO87?vertical=default&amp;f=tweets" target="_blank" title="RADIO87.FR : Hashtag #RADIO87 sur Twitter !">RADIO87.FR : Hashtag #RADIO87 sur Twitter !</a></p>';
}
add_shortcode('RADIO87HASHTAGTWITTER', 'radio87hashtagtwitter');


function suivezlatortuehashtagtwitter() {
return '<p><a style="font-size:18px;" href="https://twitter.com/hashtag/SuivezlaTortue?vertical=default&amp;f=tweets" target="_blank" title="SuivezlaTortue de RADIO87.FR : Hashtag #SuivezlaTortue sur Twitter !">SuivezlaTortue de RADIO87.FR : Hashtag #SuivezlaTortue sur Twitter !</a></p>';
}
add_shortcode('SUIVEZLATORTUEHASHTAGTWITTER', 'suivezlatortuehashtagtwitter');


function radio87chat() {
return '<p><span style="font-size:18px;"><a style="font-size:18px;" href="http://www.radio87.fr/chat/" title="RADIO87 - Chat" target="_blank">Dialoguer</a> sur le salon de discussion de RADIO87.FR</span></p>';
}
add_shortcode('RADIO87CHAT', 'radio87chat');

?>

<?php
/*
Plugin Name: WP-StrongRespond
Plugin URI: http://www.jesuisgeek.fr/wp-plugins
Description: Strong the reply @pseudo in comments / Mettez en gras la réponse @pseudo dans les commentaires
Author: Anthony VALENTIN
Version: 1.0
Author URI: http://www.jesuisgeek.fr
*/

function WpStrongRespond($content) {
	return preg_replace("#@(.*?) #i", "<strong>@$1</strong> ", $content);
}

add_filter('comment_text', 'WpStrongRespond');
?>

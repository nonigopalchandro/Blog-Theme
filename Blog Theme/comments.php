<?php
// Display comments
wp_list_comments( array(
	'style' => 'ul',
	'callback' => 'better_comments'
) );
?>

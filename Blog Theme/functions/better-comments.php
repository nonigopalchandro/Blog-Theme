<?php
function better_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>

	<?php comment_ID(); ?> <?php comment_ID() ?>">

	<?php
		break;
		default :
		// Proceed with normal comments. ?>
<ul id="comments-list" class="comments-list">
<li>
<div class="comment-box">             
<div class="comment-avatar">
<?php echo get_avatar( $comment, 45 ); ?>
</div>
<div class="comment-head">
<h6 class="comment-name by-author"><?php echo get_comment_author_link( $comment_ID ); ?></h6><h6 class="authorcss" style="margin-right:7px;">
<?php
$user_id   = get_comment(get_comment_ID())->user_id;

if ($user_id)
{
    $user_info = get_userdata($user_id );
    echo implode(', ', $user_info->roles) ;
}
else {
       echo 'Guest';
    }
?>
</h6>
<span><?php echo human_time(); ?></span>
<div class="a" style="float:right;">
<?php comment_reply_link( array_merge( $args, array(
						'reply_text' => esc_html__( 'Reply', 'HowTrick_PC' ),
						'depth'      => $depth,
						'max_depth'	 => $args['max_depth'] )
					) ); ?>
</div>

</div>
<div class="comment-content">
<?php comment_text( $comment_ID ); ?>


</div>
</li>
</ul>


<style>
.a a {
	color:#000C57;
}
.a a:hover {
	color:#047F61;
}

.authorcss {
    float:left;
    background: #03658c;
    color: #FFF;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 700;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
</style>


	<?php
		break;
	endswitch; // End comment_type check.
}



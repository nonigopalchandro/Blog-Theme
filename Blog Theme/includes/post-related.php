<div class="news-text">
<ul class="relate2">

<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

<li>
<span class="clear"></span>
<span class="imgbox">
<img class="img-zoom" title="<?php the_title();?>" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title();?>" style="width:70px; height:58px;">

</span>
<span class="relatedtitle" itemtype="http://schema.org/CreativeWork">
<h3>
<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
</h3>
</span>
<span class="relatedtitle">
<center><?php echo human_time(); ?> | <?php echo getPostViews(get_the_ID()); ?></center>
</span>
</li>
<?php } wp_reset_postdata(); ?>
</ul>
</div>
<div class="clr"></div>
<br/>
<?php get_header(); ?>

<?php get_sidebar();?>

<div class="main">
<div id="content">

<?php get_template_part( 'functions/home-login' ); ?>

<article class="short-story">
<div class="short-title clr">
<font color="white"><b>Hot Posts</b></font>
</div>    

<div class="news-text">
<ul class="relate2">

<?php
$popularpost = new WP_Query( array( 'posts_per_page' => 6,
                                    'meta_key' => 'post_views_count',
                                    'orderby' => 'meta_value_num',
                                    'post__not_in' => get_option('sticky_posts'),
                                    'order' => 'DESC'  ) ); ?>

<?php  while ($popularpost->have_posts()) : $popularpost->the_post(); ?>
<?php $count = '';?>

<li>
<span class="clear"></span>
<span class="imgbox">
<img class="img-zoom" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title();?>" style="width:70px; height:58px;">

</span>
<span class="relatedtitle" itemtype="http://schema.org/CreativeWork">
<h4>
<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
</h4>
</span>
<span class="relatedtitle">
<center><?php echo human_time(); ?> | <?php echo getPostViews(get_the_ID()); ?></center>
</span>
</li>
<?php endwhile; ?>
</ul>
</div>
<div class="clr"></div>
</article>

<article class="short-story">
<div class="short-title clr">
<font color="white"><b>Recent Posts</b></font>
</div>    
 

<div class="news-text">
<ul class="relate2">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<li>
<span class="clear"></span>
<span class="imgbox">
<img class="img-zoom" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title();?>" style="width:70px; height:58px;">

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
<?php endwhile; else: ?>
<?php endif; ?>
</ul>
</div>

<div class="clr"></div>

<div id="speed-bar"><span id="dle-speedbar">
<center><?php wp_pagenavi();?></center>
</div>
</span>

</article>
</div></span>
</div>
</div>
</div>

<?php get_footer(); ?>
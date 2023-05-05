<!-- === left sidebar ========== -->

<style>
.liton-bio img {
  display: block;
  width: 100px;
  height: 100px;
  margin: 1em auto;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-border-radius: 99em;
  -moz-border-radius: 99em;
  border-radius: 99em;
  border: 5px solid #eee;
  box-shadow: 0 3px 2px rgba(0, 0, 0, 0.3);  
}
</style>

<div class="main_left">

<div id="left-sidebar">

<div class="side-block">
<div class="block-title nav-title"><b>Categories</b></div>
<div class="block-contentt">
<ul class="top-news">
<li>
<?php wp_list_categories('title_li=');?>
</li>
</ul>
</li>
</ul>
</li>

<div class="clr" style="height:5px"></div>
</div> 
</div>

<div class="side-block">
<div class="block-title nav-title"><b>Random Posts</b></div>
<div class="block-contentt">
<?php echo do_shortcode( '[wpb-random-posts]' ) ?>


<div class="clr" style="height:5px"></div>
</div> 
</div>

</div>
</div>

<!-- === right sidebar ========== -->
<div class="main_right">
<div id="right-sidebar">


<div class="side-block">
<div class="block-title pop-title"><b>Top Posts</b></div>
<div class="block-contentt">
<ul class="top-news">
<li>
<?php
    $popular = new WP_Query( array(
        'post_type'             => array( 'post' ),
        'showposts'             => 6,
        'cat'                   => 'MyCategory',
        'ignore_sticky_posts'   => true,
        'orderby'               => 'comment_count',
        'order' => 'DESC'  ) ); ?>

<?php while ( $popular->have_posts() ): $popular->the_post(); ?>
<?php $count = '';?>

<span class="relatedtitle">
<h5>
<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
</h5>
</span>
<?php endwhile; ?>
</li>
</ul>
</ul>

</div>
</div>


</div> 
</div>
<?php get_header(); ?>

<?php get_sidebar();?>

<div class="main">
<div id="content">
<div id="content-block">

<div id="speed-bar"><span id="dle-speedbar">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Approved -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4489213123493800"
     data-ad-slot="1159369173"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</span>
</div>

<div id='dle-content'>

<article class="short-story">
<div class="short-title clr" itemtype="http://schema.org/CreativeWork">
<font color="white"><h3>Tag - <?php single_tag_title(); ?></h3></font>
</div>    
   

<div class="news-text">
<ul class="poll-text" itemtype="http://schema.org/CreativeWork">

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

<h2>
<a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
</h2>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div class="clr"></div>
</article>


<article class="short-story">
<div class="short-title clr">
<font color="white"><b>Most Popular</b></font>
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
<img class="img-zoom" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php the_title();?>" style="width:70px; height:58px;">

</span>
<span class="relatedtitle" itemtype="http://schema.org/CreativeWork">
<h5>
<a title="<?php the_title();?>" href="<?php the_permalink(); ?>"><?php the_title();?></a>
</h5>
</span>
<span class="relatedtitle">
<center><?php echo human_time(); ?> | <?php echo getPostViews(get_the_ID()); ?></center>
</span>
</li>
<?php endwhile; ?>
</ul>
</div>
<div class="clr"></div>

<div id="speed-bar"><span id="dle-speedbar">
<center><?php wp_pagenavi();?></center>
</div>
</span>

</article>
	
<div id="speed-bar"><span id="dle-speedbar">
<script id="mNCC" language="javascript">
   medianet_width = "728";
   medianet_height = "90";
   medianet_crid = "483315134";
   medianet_versionId = "111299";
   (function() {
       var isSSL = 'https:' == document.location.protocol;
       var mnSrc = (isSSL ? 'https:' : 'http:') + '//contextual.media.net/nmedianet.js?cid=8CUT7ONL3' + (isSSL ? '&https=1' : '');
       document.write('<scr' + 'ipt type="text/javascript" id="mNSC" src="' + mnSrc + '"></scr' + 'ipt>');
   })();
</script>
</div>
</span>

</div></span>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
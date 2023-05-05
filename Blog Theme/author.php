<?php get_header(); ?>

<?php get_sidebar();?>


<div id="content">
<div id="content-block">


<div id='dle-content'>
<article class="short-story">
<div class="short-title clr">
<font color="white"><b>Posted by <?php the_author(); ?></b></font>
</div>

<div class="news-text">
<ul class="relate2">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<li>
<span class="clear"></span>
<span class="imgbox">
<img class="img-zoom" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" style="width:70px; height:58px;">

</span>
<span class="relatedtitle" itemtype="http://schema.org/CreativeWork">
<h4>
<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
</h4>
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
</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>
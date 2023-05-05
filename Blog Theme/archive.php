<?php get_header(); ?>

<?php get_sidebar();?>


<div id="content">
<div id="content-block">

<div class="side-block">
<div class="block-contentt">

<div id='dle-content'>
<article class="short-story">
<div class="short-title clr" itemtype="http://schema.org/CreativeWork">
<font color="white"><h3><?php single_cat_title(); ?></h3></font>
</div>    
   

<div class="news-text">
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

<ul class="relate2">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<li>
<span class="clear"></span>
<span class="imgbox">
<img class="img-zoom" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php the_title();?>" style="width:70px; height:58px;">

</span>
<span class="relatedtitle" itemtype="http://schema.org/CreativeWork">
<h2>
<a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a>
</h2>
</span>
<span class="relatedtitle">
<center><?php echo human_time(); ?> | <?php echo getPostViews(get_the_ID()); ?> </center>
</span>
</li>
<?php endwhile; else: ?>
<?php endif; ?>
</ul>
<div class="clr"></div>

<div id="speed-bar"><span id="dle-speedbar">
<center><?php wp_pagenavi();?></center>
</div>
</span>

</article>

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
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>
<?php
get_header();
global $wp_query;
?>

<?php get_sidebar();?>


<div class="main">
<div id="content">
<div id="content-block">

<style>
.ttl {
border-left:3px solid #196EAA;border-bottom:1px solid #196EAA;margin-bottom:2px;padding:6px;background:#F3F3F3;margin-left:6px;margin-right:6px;
}
</style>
 <?php if ( have_posts() ) { ?>
   <div class="ttl">
        Search For: <?php the_search_query(); ?>
</div>
       

            <ul class="relate2">

            <?php while ( have_posts() ) { the_post(); ?>

               <li>
                 <h3><a href="<?php echo get_permalink(); ?>">
                   <?php the_title();  ?>
                 </a></h3>
<figure>
<img class="liton" src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" alt="<?php the_title();?>" style="width:356px; height:70px;">
</figure>
               </li>

            <?php } ?>

            </ul>

           <div class="speed-bar">
<center><?php wp_pagenavi();?></center>
</div>

        <?php } ?>

    </div>
  </div>
</div>
</div>
</div>
</div>
</br>
<?php get_footer();?>
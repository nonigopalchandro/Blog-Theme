<?php get_header(); ?>

<?php
		if ( isset( $_GET['postcomment'] ) ) :
			if ( have_posts() ) : while ( have_posts() ): the_post();
				comments_template( '/postcomment.php' );
			endwhile; endif;

		else :
	?>

<?php get_sidebar();?>

<div id="content">
<div id="content-block">
<div class="side-block">

<div id='dle-content'>
<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
<article class="short-story">
<div class="short-title clr">
<h1>
<a href="<?php the_permalink(); ?>">
<?php the_title();?>
</a>
</h1> 
</div>    
  


<style type="text/css">
.news-text img{
	width:100%;
	height:130px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-bottom:3px solid #E1E2E6;
}
.heading_re .btn1 a {
	text-decoration: none;
	position: absolute; 
	bottom: 0px; right: 0px; 
	background:#009CFF;
	padding: 3px 10px; 
	font-size: 14px; 
	color: white;
        float:right; padding:5px;
        font-family:Asap;
     border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
}
.heading_re .btn1 a:hover {
	text-decoration: none;
	position: absolute; 
	bottom: 0px; right: 0px; 
	background:red;
	padding: 3px 10px; 
	font-size: 14px; 
	color: white;
        float:right; padding:5px;
        font-family:Asap;
     border: 3px solid #FFF;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
    box-shadow: 0 1px 2px rgba(0,0,0,0.2);
}
</style>

<div class="news-text">
<div class="heading_re">
<?php the_content(); ?>
</div>
</div>
<div class="clr"></div>
</article>
<?php endwhile; ?>
<?php endif;?>
<?php endif; ?>

</div>
</div>
</div>
</div>
</div>
</div>


<?php get_footer(); ?>
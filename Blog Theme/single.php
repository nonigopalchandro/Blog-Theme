<?php get_header();?>

<?php get_sidebar();?>

<div id="content">
<div id="content-block">
<div class="side-block">

<div id='dle-content'>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="short-story">
<div class="short-title clr" itemtype="http://schema.org/CreativeWork">
<h1>
<a title="<?php the_title();?>" href="<?php the_permalink(); ?>">
<?php the_title();?>
</a>
</h1> 
</div>

<div class="twPc-div">
    <a class="twPc-bg twPc-block"></a>

	<div>
		<div class="twPc-button">
            <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
            <a href="https://twitter.com/HowtrickCom" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @HowtrickCom</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Twitter Button -->   
		</div>

		<div class="twPc-avatarImg twPc-avatarLink">
			<?php echo get_avatar( get_the_author_meta('email'), '65' ); ?>
		</div>

		<div class="twPc-divUser">
			<div class="twPc-divName">
				<?php the_author_posts_link(); ?>
			</div>
			<span>
				<span><font color="#0B8142"><?php echo getPostViews(get_the_ID()); ?><?php setPostViews(get_the_ID());?></font></span></a>
		</div>

		<div class="twPc-divStats">

			<ul class="twPc-Arrange">
				<li class="twPc-ArrangeSizeFit">
					
						<span class="twPc-StatLabel twPc-block">Published</span>
						<span class="twPc-StatValue"><font color="#003C5F"><?php the_author_posts(); ?> Posts</font></span>
					
				</li>
				<li class="twPc-ArrangeSizeFit">
						<span class="twPc-StatLabel twPc-block">Level</span>
						<span class="twPc-StatValue"><font color="#003C5F"><?php $aid = get_the_author_meta('ID'); 
echo get_user_role($aid); ?></font></span>
					
				</li>
			<li class="twPc-ArrangeSizeFit">
					
						<span class="twPc-StatLabel twPc-block">Posted On</span>
						<span class="twPc-StatValue"><style>.twPc-StatValue a {color:#003C5F} .twPc-StatValue a:hover {color:#8C1394;}</style><?php the_category( ' › ' ) ?></span>
					
				</li>
			</ul>

		</div>
	</div>
</div>
  </div>
    
<div class="news-text">
<div class="heading_re">
<p>
<center>
<a href="http://rainwapbd.com"><img src="http://howtrick.com/wp-content/uploads/2017/03/rainwapbd.png" alt="official ad"/></a>
</center>
<?php the_content(); ?>
<p>
</div>


<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<script type="text/javascript">
//<![CDATA[
if (typeof newsletter_check !== "function") {
window.newsletter_check = function (f) {
    var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
    if (!re.test(f.elements["ne"].value)) {
        alert("The email is not correct");
        return false;
    }
    for (var i=1; i<20; i++) {
    if (f.elements["np" + i] && f.elements["np" + i].required && f.elements["np" + i].value == "") {
        alert("");
        return false;
    }
    }
    if (f.elements["ny"] && !f.elements["ny"].checked) {
        alert("You must accept the privacy statement");
        return false;
    }
    return true;
}
}
//]]>
</script>

<div class="form-style-10">
<h6>Sign Up Now!<span>Sign up and tell us what you think of the site!</span></h6>
<form method="post" action="http://howtrick.com/?na=s" onsubmit="return newsletter_check(this)">
<div class="section">Email</div>
<div class="inner-wrap">
<input class="tnp-email" type="email" name="ne" size="30" required>
<div class="button-section">
<input class="tnp-submit" type="submit" value="Subscribe"/>
</form>
</div>
</div>
</div>

<div class="news-text">
<span class="relatedtitle">
Tag: <?php the_tags('',' ',' '); ?>
</span>
</div>

<div class="social">
<center><b>Share:</b>
        <!--Facebook-->
        <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;">Facebook</a>
 <a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a>
        <!--Google Plus-->
        <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google+</a></center>
</div>


<?php get_template_part( 'includes/post-related' ); ?>
</div>
    
    <div class="clr"></div>

	</article>

<?php endwhile; else: ?>
<?php endif; ?>

<?php comments_template( '', true ); ?>

<?php get_template_part( 'functions/comment-form' ); ?>

</div>
</div>
</div>
</div>
<?php get_footer();?>
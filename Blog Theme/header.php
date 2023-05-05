<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel="stylesheet" href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/extra/login/css/style.css">

<link rel="alternate" href="http://howtrick.com" hreflang="en-us" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>?ver=1.3" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<title><?php if ( is_category() ) {
	echo single_cat_title();
} elseif ( is_tag() ) {
	echo single_tag_title();
} elseif ( is_archive() ) {
	wp_title(''); echo bloginfo( 'name' );
} elseif ( is_search() ) {
	echo 'Search &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
} elseif ( is_home() || is_front_page() ) {
	bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
}  elseif ( is_404() ) {
	echo 'Error 404 Not Found | '; bloginfo( 'name' );
} elseif ( is_single() ) {
	wp_title('');
} else {
	echo wp_title( ' | ', false, right ); bloginfo( 'name' );
} ?></title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73758403-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/jquery.js"></script>
<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/jqueryui.js"></script>
<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/dle_js.js"></script>
<meta name="viewport" content="user-scalable=yes, minimum-scale=0.25, maximum-scale=3.0" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu" />

<link rel="stylesheet" href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style/search.css"/>
<link href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style/cmt.css" rel="stylesheet">
<link href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style/styles.css" rel="stylesheet">
<link href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style/engine.css" rel="stylesheet">
<link rel="StyleSheet" href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style/dtree.css" type="text/css" />
<link media="screen" href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/style.css" type="text/css" rel="stylesheet"/>

<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/dtree.js"></script>
<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Michroma" />
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<script>
$(".lcomm-item").click(function(){window.location=$(this).find("a:first").attr("href");return false;});
$(document).ready(function(){$('.main-menu li .active').click(function(){$(this).toggleClass("active-ad");});});
$(document).ready(function(){$('.main-menu li').click(function(){$('ul',this).slideToggle(200).toggleClass("active");});});
$(document).ready(function(){$('#top-nav .active').hover(function(){$('ul',this).slideToggle(200).toggleClass("menu-add");});});
$(document).ready(function(){$('#top-nav .active').hover(function(){$(this).toggleClass("active-for");});});
</script>
    
<script type="text/javascript">
    $(function() {
    $(window).scroll(function() {
    if($(this).scrollTop() != 0) {
    $('#toTop').fadeIn();
    } else {
    $('#toTop').fadeOut();
    }
    });
    $('#toTop').click(function() {
    $('body,html').animate({scrollTop:0},600);
    });
    });
    </script> 
    
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/extra/social/jquery.social-buttons.css">

<script src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/classie.js"></script>
<script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 300,
                header = document.querySelector("header");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
</script>

</head>

<body>

<nav id="top-menu">
	<div class="center clr">
    	<ul id="top-nav">
   			<li><a href="/privacy">Privacy</a></li>
			<li><a href="/about">About</a></li>
			
			<li><a href="/contact-us/">Contact</a></li>
			<li><a href="/sitemap_index.xml">SiteMap</a></li>

</ul>        

</nav>


<div class="main">
<div id="wrapper" class="clr">

<header id="top-header" class="clr">
<div class="header-top">
<div class="logo">

<a href="http://howtrick.com">
<img src="http://howtrick.com/wp-content/uploads/2016/11/Logo-1.png" alt="HowTrick.Com" weight="120" height="80"/>
</a>

</div>

<div class="ads">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728*90 PC -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-4489213123493800"
     data-ad-slot="9373525172"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="search">
<form method="get" action="<?php bloginfo( 'home' ); ?>" id="searchbox5">
        <input id="search51" name="s" type="text" size="40" placeholder="Search..." value="<?php the_search_query(); ?>" />
    </form>
</div>
<div class="clearfix"></div>
</div>
<div class="top-nav">
<span class="menu"><img src="images/menu.png" alt="">  </span>
<ul>
<li><a href="http://howtrick.com"> Home </a></li>
<li><a href="/online/android-studio"> Android Studio</a></li>
<li><a href="/online/wordpress"> WordPress Tricks </a></li>					
<li><a href="/online/seo-tutorials" >SEO Tutorials </a></li>
<li><a href="/online/gp-internet-offer"> GP Internet Tricks </a></li>
<li><a href="/online/php-scripts"> PHP Scripts</a></li>
<li><a href="/online/jquery"> Jquery </a></li>
<div class="clearfix"></div>
</ul>
</div>			
</header>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=939260269521279";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="application/ld+json">
{
   "@context": "http://schema.org",
   "@type": "WebSite",
   "url": "http://www.howtrick.com/",
   "potentialAction": {
     "@type": "SearchAction",
     "target": "http://howtrick.com/?s={search_term_string}",
     "query-input": "required name=search_term_string"
   }
}
</script>
<style>

.header-top {
	padding: 1.5em 0;
	border-bottom: 1px solid #ddd;
}
.logo img {
	margin-top:20px;
}
.logo {
	float: left;
}
.top-nav {
	margin-bottom:10px;
	border-bottom:3px solid red;
}
.top-nav ul li{
	display: inline-block;
	float: left;	
	padding: 15px 0;
	border-top: 1px solid #fff;	
}
.top-nav ul li a{
	font-size: 0.9em;
	text-decoration: none;
	color: #A9A9A9;
	padding:0 22px;
	display:block;
	border-right: 1px solid #cecece;
	font-family: 'Michroma';
	
}
.top-nav ul li a:hover,.top-nav ul li.active a{
	color: #FD4641;
}
.top-nav ul li:hover,.top-nav ul li.active {
	border-top: 1px solid #FD4641;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-o-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

.top-nav span.menu{
	display: none;
}

/*----*/
.ads {
	margin-top:18px;
	margin-left:70px;
	overfollow:hidden;
	display:block;
	float: left;
}
.search {
	position: relative;
	background: #fff;
	padding: 5px 0px;
	float: right;
}
.search input[type="text"] {
	outline: none;
	padding:0 10px;
	background:#fff;
	width: 88%;
	border: none;
	font-size: 0.9em;
	color: #A9A9A9;
	font-family: 'Michroma';
}
.search input[type="submit"] {	
	width: 20px;
	height: 20px;	
	background:url('http://www.clker.com/cliparts/7/C/B/Q/6/n/search-icon-hi.png')no-repeat -2px -4px;
	border: none;
	cursor: pointer;
	position: absolute;
	outline: none;
	padding:0;
}
</style>
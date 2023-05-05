

<script type="javascript">
$(document).ready(function() {
    $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

<script src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/extra/login/js/index.js"></script>
<script src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/img.js"></script>
<script type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

	__gaTracker('create', 'UA-73758403-1', 'auto', {'allowAnchor': true});
	__gaTracker('set', 'forceSSL', true);
	__gaTracker('set', 'dimension1', 'false');
	__gaTracker('send','pageview');

</script>

<script>
  $(document).ready(function(){
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });
  });
</script>

<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/jquery.sticky-kit.min.js"></script>
<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/right_sidebar.js"></script>
<script type="text/javascript" src="http://howtrick.com/wp-content/themes/HowTrick_PC_V2.0/js/left_sidebar.js"></script>
<?php wp_footer(); ?>
</body>
</html>
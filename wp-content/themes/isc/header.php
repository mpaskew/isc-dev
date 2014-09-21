<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />


  <title>Illinois Science Council - <?php the_title(); ?></title>

  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/foundation.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/main.css">
   
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.foundation.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.svg.js"></script>

  <?php wp_head(); ?>
<body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=475324885857949";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
	<header class="row">
		<h1 class="ir"><a href="/"><div class="logo"></div><!-- <img class="logo" src="<?php bloginfo('template_directory'); ?>/assets/images/isc-logo.jpg" alt="Illinois Science Council" /> --></a></h1>
		<script type="text/javascript">
			if (!Modernizr.svg) { 
				$("#logo").css("background-image", "url(<?php bloginfo('template_directory'); ?>/assets/images/isc-logo.jpg)"); 
			}
		</script>
		<nav class="right">
			<ul class="h-list main-nav ext">
				<li class="main-nav-item">
                    <a class="main-nav-link nav-events" href="/events/upcoming">Events</a>
                </li>
				<li class="main-nav-item">
                    <a class="main-nav-link nav-about" href="/about">About</a>
                </li>
				<li class="main-nav-item">
                    <a class="main-nav-link nav-blog" href="/news">Blog</a>
                </li>
				<li class="main-nav-item">
                    <a class="main-nav-link nav-resource" href="/resources">Resources</a>
                </li>
			</ul>
        </nav>
	</header>
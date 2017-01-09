<!doctype html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' ); ?>/favicon-152.png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSSフィード" href="<?php bloginfo( 'rss2_url' ); ?>">
<?php echo function_noindex(); ?>
<meta name="description" content="<?php echo function_description(); ?>">
<title><?php echo function_title(); ?></title>
<?php wp_head(); ?>
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-29186068-1', 'mzmjp.net');
	  ga('send', 'pageview');

	</script>
	<!-- /Google Analytics -->
</head>
<body <?php body_class(); ?> onload="prettyPrint()">
	<header class="mod-header" role="banner">
		<div class="mod-title">
			<div class="mod-title-inner">
				<h1 class="mod-title-logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<a href="#menu" class="mod-menu-button" role="button" aria-controls="menu" aria-expanded="false"><span class="icon-menu" aria-hidden="true"></span>Menu</a>
			<!-- /.mod-title-inner --></div>
		<!-- /.mod-title-wrap --></div>
		<div id="menu" class="mod-menu">
			<div class="mod-menu-inner">
				<div class="mod-menu-about">
					<a href="<?php bloginfo('url'); ?>/about">About</a>
				<!-- /.mod-menu-about --></div>
				<div class="mod-menu-archive">
					<a href="<?php bloginfo('url'); ?>/archive">Archive</a>
				<!-- /.mod-menu-about --></div>
				<div class="mod-menu-search" role="search">
					<div class="mod-search-content">
						<?php get_search_form(); ?>
					<!-- /.mod-search-content --></div>
				<!-- /#search --></div>
			<!-- /.mod-menu-inner --></div>
		<!-- /.mod-menu --></div>
	<!-- /.mod-header --></header>

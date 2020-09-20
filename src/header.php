<!doctype html>
<html lang="ja">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NMRRGSP');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>@@include('../style.css')</style>
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' ); ?>/favicon-152.png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?> RSSフィード" href="<?php bloginfo( 'rss2_url' ); ?>">
<?php echo function_noindex(); ?>
<title><?php echo function_title(); ?></title>
<meta name="description" content="<?php echo function_description(); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMRRGSP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header class="mod-header">
		<div class="mod-title">
			<div class="mod-title-inner">
				<h1 class="mod-title-logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
				<button class="mod-menu-button" id="js-menu-button" aria-controls="menu" aria-expanded="false"><span class="mod-menu-button-close"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve"><g><rect y="16" class="st0" width="512" height="96"></rect><rect y="208" class="st0" width="512" height="96"></rect><rect y="400" class="st0" width="512" height="96"></rect></g></svg>Menu</span></button>
			<!-- /.mod-title-inner --></div>
		<!-- /.mod-title-wrap --></div>
		<div id="js-menu" class="mod-menu">
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

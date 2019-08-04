<!doctype html>
<html lang="ja">
<head>
<?php
if ( is_single( '5' ) ) {
	echo "<script>dataLayer = [{'event': 'loadready','trackPageview': '/blog/2012/01/04/0025/','title': 'リダイレクト自分のWeb上のアカウントまとめ',}];</script>";
} else {
}
?>

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
<meta name="description" content="<?php echo function_description(); ?>">
<title><?php echo function_title(); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> onload="prettyPrint()">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NMRRGSP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header class="mod-header">
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

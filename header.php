<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shCore.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/shThemeDefault.css">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/favicon-152.png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
<title><?php if ( is_single() ) { ?><?php wp_title('-',true,'right'); ?><?php } ?><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
<script src="<?php bloginfo('template_url'); ?>/js/shCore.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/shBrushXml.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/shBrushCss.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/shBrushSass.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/shBrushJScript.js"></script>
</head>
<body <?php body_class(); ?>>
	<header class="mod-header">
		<h1 class="mod-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
		<div class="mod-search"><?php get_search_form(); ?></div>
	<!-- /.mod-header --></header>

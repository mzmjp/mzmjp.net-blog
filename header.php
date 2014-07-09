<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/favicon-152.png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
<title><?php if ( is_singular() ) { ?><?php wp_title('-',true,'right'); ?><?php } ?><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="mod-header">
		<div class="mod-header-wrap">
			<h1 class="mod-title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="mod-search-button">
				<a href="#search"><label for="s" form="searchform"><span class="icon-search"></span>検索</label></a>
			<!-- /.mod-search-button--></div>
		<!-- /.mod-header-wrap --></div>
	<!-- /.mod-header --></header>

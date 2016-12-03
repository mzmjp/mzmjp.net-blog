<!doctype html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/favicon-152.png">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSSフィード" href="<?php bloginfo('rss2_url'); ?>">
<title>
<?php if ( is_search() ) {
	$allsearch =& new WP_Query("s=$s&posts_per_page=-1");
	$key = wp_specialchars($s, 1);
	$count = $allsearch->post_count;
	$count!=0;
	echo 'キーワード“'.$key.'”での検索結果 ('.$count.'件) - ';
	bloginfo('name');
	}
else {
	wp_title(' - ', true, 'right');
	bloginfo('name');
} ?>
</title>
<?php wp_head(); ?>
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

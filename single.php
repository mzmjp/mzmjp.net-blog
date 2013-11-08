<?php get_header(); ?>

	<div class="mod-main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<time class="mod-entry-date"><?php the_date("Y-m-d");?></time>
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>
		<!-- /.mod-entry --></article>
		<aside class="mod-entry-ad">
<?php if(wp_is_mobile()) { ?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7678557917942331";
/* mzmjp.net/blog - 320x50 */
google_ad_slot = "3458638261";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php } else { ?>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-7678557917942331";
/* mzmjp.net/blog - 728x90 */
google_ad_slot = "6551705463";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php } ?>
		<!-- /.mod-entry-ad --></aside>
<?php endwhile; ?>
		<div class="mod-pager">
			<ul>
				<li><?php previous_post_link('%link','&#x3c;&#x3c; %title'); ?></li>
				<li><?php next_post_link('%link','%title &#x3e;&#x3e;'); ?></li>
			</ul>
		<!-- /.mod-pager --></div>
	<!-- /.mod-main --></div>
<?php else : ?>
	<p>No pages exist.</p>
<?php endif; ?>

<?php get_footer(); ?>
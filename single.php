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

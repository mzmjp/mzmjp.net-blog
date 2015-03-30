<?php get_header(); ?>

	<div class="mod-main" role="main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>
		<!-- /.mod-entry --></article>
<?php endwhile; ?>
	<!-- /.mod-main --></div>
<?php else : ?>
	<p>No pages exist.</p>
<?php endif; ?>

<?php get_footer(); ?>

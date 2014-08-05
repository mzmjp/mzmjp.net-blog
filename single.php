<?php get_header(); ?>

	<div class="mod-main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-date"><span class="icon-calendar"></span><time><?php the_date("Y-m-d");?></time></div>
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>
			<footer class="mod-entry-footer">
				<p class="mod-entry-tags"><?php the_tags('<span class="icon-tag"></span>Tags: ',', ',''); ?></p>
				<p class="mod-entry-parmalink"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">パーマリンク</a></p>
			<!-- /.mod-entry-footer --></footer>
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

<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

	<div class="mod-main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<time class="mod-entry-date"><?php the_date("Y-m-d");?></time>
				<h1 class="mod-entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>

			<footer class="mod-entry-footer">
				<?php the_tags('<ul class="mod-entry-tags"><li class="mod-entry-tagname><span class="icon-tag" aria-hidden="true"></span>','</li><li class="mod-entry-tagname"><span class="icon-tag" aria-hidden="true"></span>','</li></ul>');?>
				<p class="mod-entry-parmalink"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">パーマリンク</a></p>
			<!-- /.mod-entry-footer --></footer>

		<!-- /.mod-entry --></article>
<?php endwhile; ?>
		<div class="mod-pager">
			<ul>
				<li><?php next_posts_link('&#x3c;&#x3c; 古い記事へ'); ?></li>
				<li><?php previous_posts_link('新しい記事へ &#x3e;&#x3e;') ?></li>
			</ul>
		<!-- /.mod-pager --></div>
	<!-- /.mod-main --></div>
<?php else : ?>
		<article class="mod-entry">
			<p>No pages exist.</p>
		<!-- /.mod-entry --></article>
<?php endif; ?>

<?php get_footer(); ?>

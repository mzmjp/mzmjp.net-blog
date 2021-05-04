<?php get_header(); ?>

	<div class="mod-main" role="main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-date"><span class="icon-calendar" aria-hidden="true"></span><time><?php the_time("Y-m-d");?></time></div>
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-postdate">この記事は、<time datetime="<?php the_time('c');?>"><?php the_time('Y年m月d日');?></time>に公開され<?php if(get_the_time('Y/m/d') != get_the_modified_date('Y/m/d')):?>、<time datetime="<?php the_modified_date('c');?>"><?php the_modified_date('Y年m月d日') ?></time>に更新され<?php endif;?>ました。</div>
			<div class="mod-entry-content">
<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>

<?php get_template_part('inc/entry-footer'); ?>

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
<?php endif; ?>

<?php get_footer(); ?>

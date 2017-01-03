<?php get_header(); ?>

	<div class="mod-main" role="main">

		<div class="mod-main-message"><p>
		<?php
		#タグページの場合
		if ( is_tag() ) {
			echo '<strong>';
			echo single_tag_title();
			echo '</strong>のタグが付けられている記事の一覧です。';
		}
		?>
		</p></div><!-- /.mod-main-message -->
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-date"><span class="icon-calendar" aria-hidden="true"></span><time><?php the_time("Y-m-d");?></time></div>
				<h1 class="mod-entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
			<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>
			<footer class="mod-entry-footer">
				<?php the_tags('<ul class="mod-entry-tags"><li class="mod-entry-tagname"><span class="icon-tag" aria-hidden="true"></span>','</li><li class="mod-entry-tagname"><span class="icon-tag" aria-hidden="true"></span>','</li></ul>');?>
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

	<div class="mod-main" role="main">
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-title">ページが見つかりませんでした。</div>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
				<p>申し訳ございません、ページが見つかりませんでした。<br>ページが既に削除されてしまったか、URLが間違っている可能性があります。<br><a href="<?php bloginfo('url'); ?>/archive/">記事一覧</a>もしくは、<a href="#search">サイト内検索</a>からページをお探しください。</p>
			<!-- /.mod-entry-content --></div>
			<footer class="mod-entry-footer">
				<?php the_tags('<ul class="mod-entry-tags"><li class="mod-entry-tagname"><span class="icon-tag" aria-hidden="true"></span>','</li><li class="mod-entry-tagname"><span class="icon-tag" aria-hidden="true"></span>','</li></ul>');?>
				<p class="mod-entry-parmalink"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">パーマリンク</a></p>
			<!-- /.mod-entry-footer --></footer>
		<!-- /.mod-entry --></article>
	<!-- /.mod-main --></div>

<?php endif; ?>

<?php get_footer(); ?>

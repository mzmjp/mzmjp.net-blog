<?php get_header(); ?>

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

<?php get_footer(); ?>

<?php get_header(); ?>

	<div class="mod-main" role="main">
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-title">ページが見つかりませんでした。</div>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
				<p>申し訳ございません、ページが見つかりませんでした。<br>ページが既に削除されてしまったか、URLが間違っている可能性があります。<br><a href="<?php bloginfo('url'); ?>/archive/">記事一覧</a>もしくは、<a href="#search">サイト内検索</a>からページをお探しください。</p>
			<!-- /.mod-entry-content --></div>

<?php get_template_part('inc/entry-footer'); ?>

		<!-- /.mod-entry --></article>
	<!-- /.mod-main --></div>

<?php get_footer(); ?>

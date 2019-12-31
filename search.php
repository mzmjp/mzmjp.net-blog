<?php get_header(); ?>

	<div class="mod-main" role="main">
		<div class="mod-main-message"><p>
		<?php
			$allsearch = new WP_Query("s=$s&posts_per_page=-1");
			$key = esc_html($s, 1);
			$count = $allsearch->post_count;
			if( $count != 0 ) {
				// 検索結果を表示:該当記事あり
				echo 'キーワード“<strong>'.$key.'</strong>”で検索した結果、<strong>'.$count.'</strong>件の記事が見つかりました。';
			} else {
				// 検索結果を表示:該当記事なし
				echo 'キーワード“<strong>'.$key.'</strong>”で検索した結果、関連する記事は見つかりませんでした。キーワードを変更して、再度検索をしてみて下さい。';
			}
		?>
		</p></div><!-- /.mod-main-message -->
		<?php if ( have_posts() ) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<div class="mod-entry-date"><span class="icon-calendar" aria-hidden="true"></span><time><?php the_time("Y-m-d");?></time></div>
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-content">
			<?php the_content(); ?>
			<!-- /.mod-entry-content --></div>

<?php get_template_part('inc/entry-footer'); ?>

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
	<?php endif; ?>

<?php get_footer(); ?>

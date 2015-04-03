<?php get_header(); ?>

	<div class="mod-main" role="main">
<?php $allsearch =& new WP_Query("s=$s&posts_per_page=-1");
$key = wp_specialchars($s, 1);
$count = $allsearch->post_count;
if($count!=0){
// 検索結果を表示:該当記事あり
	echo '<div class="mod-search-result"><p>キーワード“<strong>'.$key.'</strong>”で検索した結果、<strong>'.$count.'</strong>件の記事が見つかりました。</p></div>';
}
else {
// 検索結果を表示:該当記事なし
	echo '<div class="mod-search-result"><p>キーワード“<strong>'.$key.'</strong>”で検索した結果、関連する記事は見つかりませんでした。キーワードを変更して、再度検索をしてみて下さい。</p></div>';
}
?>
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
<?php endif; ?>

<?php get_footer(); ?>

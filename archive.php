<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

	<div class="mod-main" role="main">
<?php if ( have_posts() ) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="mod-entry">
			<header class="mod-entry-header">
				<h1 class="mod-entry-title"><?php the_title(); ?></h1>
			<!-- /.mod-entry-header --></header>
			<div class="mod-entry-list">
				<ol>
				<?php
					$args = array(
						'posts_per_page'	=> -1,
						'order'						=> 'DESC',
						'orderby'					=> 'date',
					);
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
					setup_postdata( $post );
				?>
					<li>
						<a href="<?php the_permalink(); ?>">
							<div class="mod-entry-date">
								<span class="icon-calendar" aria-hidden="true"></span><time><?php the_time("Y-m-d");?></time></div>
								<?php the_title(); ?>
						</a>
					</li>
				<?php
					endforeach; 
					wp_reset_postdata();
				?>
				</ol>
			<!-- /.mod-entry-list --></div>
		<!-- /.mod-entry --></article>

<?php endwhile; ?>

	<!-- /.mod-main --></div>

<?php else : ?>

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

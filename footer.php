	<footer class="mod-footer">
		<div class="mod-footer-wrap">
			<div class="mod-footer-block mod-about-search">
				<h1>このブログについて</h1>
				<p>このブログでは、mzmjp が「Web制作」をテーマに勉強したことやハマってしまったことをメモしています。このブログについての詳細や筆者に関しての情報は<a href="<?php bloginfo('url'); ?>/about">about ページ</a>にてご確認下さい。</p>
				<div id="search" role="search">
					<h1>サイト内検索</h1>
					<div class="mod-search-content">
						<form method="get" class="searchform" action="<?php echo home_url( '/' ); ?>">
							<label for="search--footer">検索</label>
							<input type="text" value="" name="s" id="search--footer" />
							<input type="submit" value="検索する" />
						</form>
					<!-- /.mod-search-content --></div>
				<!-- /#search --></div>
			<!-- /.mod-about-search --></div>
			<div class="mod-footer-block mod-latest-entry">
				<h1>最新記事一覧</h1>
				<ol>
				<?php
					$args = array( 'posts_per_page' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
					$postslist = get_posts( $args );
					foreach ( $postslist as $post ) :
					setup_postdata( $post );
				?> 
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
					endforeach; 
					wp_reset_postdata();
				?>
				</ol>
				<p class="mod-latest-entry-link"><a href="<?php bloginfo('url'); ?>/archive/">記事一覧を見る</a></p>
			<!-- /.mod-latest-entry --></div>
		<!-- /.mod-footer-wrap --></div>
		<small class="mod-copyright">&#169; 2013 mzmjp</small>
	<!-- /.mod-footer --></footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- Menu Toggle -->
	<script type="text/javascript">
	$(function(){
		var menu = $('.mod-menu');
		var button = $('.mod-menu-button');
		menu.css('display', 'none');
		button.click(function(event){
			event.preventDefault();
			if(menu.css('display') == 'none') {
				menu.slideDown(70, 'linear');
				button.attr('aria-expanded', 'true').html('<span class="icon-cancel" aria-hidden="true"></span>Close');
				} else {
					menu.slideUp(70, 'linear');
					button.attr('aria-expanded', 'false').html('<span class="icon-menu" aria-hidden="true"></span>Menu');
				}
		});
	});
	</script>
	<!-- /Menu Toggle -->
	<!-- Google Code Prettify -->
	<script src="<?php bloginfo('template_url'); ?>/js/prettify.js" async></script>
	<script>$(function(){prettyPrint()});</script>
	<!-- /Google Code Prettify -->
<?php wp_footer(); ?>
</body>
</html>

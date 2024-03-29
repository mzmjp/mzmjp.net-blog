<?php wp_footer(); ?>
<footer class="mod-footer">
		<div class="mod-footer-wrap">
			<div class="mod-footer-block mod-about-search">
				<h1>このブログについて</h1>
				<p>このブログでは、私が「Web制作」をテーマに勉強したことやハマってしまったことをメモしています。このブログについての詳細や筆者に関しての情報は<a href="<?php bloginfo('url'); ?>/about">about ページ</a>にてご確認下さい。</p>
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
					$args = array(
						'posts_per_page' => 5,
						'order'=> 'DESC',
						'orderby' => 'date',
					);
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
	<!-- Menu Toggle -->
	<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
		let button = document.getElementById('js-menu-button');
		let menu = document.getElementById('js-menu');
		menu.style.display = 'none';
		button.addEventListener("click", function(){
			event.preventDefault();
			var ms = 5000; //スクロールの速さを指定
			if(menu.style.display == 'none') {
				menu.style.display = "block"; //displayプロパティの値をblockに設定
				button.innerHTML = '<span class="mod-menu-button-open"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve"><g><polygon class="st0" points="511.997,112.534 399.463,0 255.998,143.47 112.528,0 0.003,112.545 143.463,256.004 0.003,399.464 112.528,512 255.998,368.539 399.463,512 511.997,399.464 368.538,256.004 "></polygon></g></svg>Close</span>';
				button.setAttribute('aria-expanded', 'true');
				} else {
					menu.style.display = "none"; //displayプロパティの値をblockに設定
					button.innerHTML = '<span class="mod-menu-button-close"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="width: 16px; height: 16px; opacity: 1;" xml:space="preserve"><g><rect y="16" class="st0" width="512" height="96"></rect><rect y="208" class="st0" width="512" height="96"></rect><rect y="400" class="st0" width="512" height="96"></rect></g></svg>Menu</span>';
					button.setAttribute('aria-expanded', 'false');
				}
		});
	});
	</script>
	<!-- /Menu Toggle -->

	<!-- Google Code Prettify -->
	<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js" async></script>
	<!-- /Google Code Prettify -->
<?php wp_footer(); ?>
</body>
</html>

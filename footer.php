	<footer class="mod-footer" role="contentinfo">
		<div class="mod-footer-wrap">
			<div class="mod-footer-block mod-about-search">
				<h1>このブログについて</h1>
				<p>このブログでは、mzmjp が「Web制作」をテーマに勉強したことやハマってしまったことをメモしています。このブログについての詳細や筆者に関しての情報は<a href="<?php bloginfo('url'); ?>/about">about ページ</a>にてご確認下さい。</p>
				<div id="search" role="search">
					<h1>サイト内検索</h1>
					<div class="mod-search-content">
						<?php get_search_form(); ?>
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
				  setup_postdata( $post ); ?> 
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
				endforeach; 
				wp_reset_postdata();
				?>
				</ol>
			<!-- /.mod-latest-entry --></div>
		<!-- /.mod-footer-wrap --></div>
		<small class="mod-copyright">&#169; 2013 mzmjp</small>
	<!-- /.mod-footer --></footer>
	<!-- Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-29186068-1', 'mzmjp.net');
	  ga('send', 'pageview');

	</script>
	<!-- /Google Analytics -->
	<!-- Google Code Prettify -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/prettify.js"></script>
	<script>$(function(){prettyPrint()});</script>
	<!-- /Google Code Prettify -->
<?php wp_footer(); ?>
</body>
</html>

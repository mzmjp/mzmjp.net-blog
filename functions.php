<?php
	#編集画面で改行した際に自動でp要素を生成させない
	remove_filter ('the_content', 'wpautop');

	#検索結果から通常投稿以外のページを除外
	#via : http://www.webcreator-net.com/tips_memo/wordpress/20120311223048.html
	function search_filter($query) {
	if (!$query -> is_admin && $query -> is_search) {
		$query -> set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts', 'search_filter');

	#検索結果を日付順で表示する
	#via : http://www.nigauri.me/tech/wordpress/customize_wordpress/custom_posts_search_orderby
	add_filter('posts_search_orderby', 'custom_posts_search_orderby');
	function custom_posts_search_orderby() {
		return ' post_date desc ';
	}

	#titleの設定
	function function_title() {
		if ( is_search() ) {
			$search_word = get_search_query();
			$search_word = esc_attr( $search_word );
			echo 'キーワード“'.$search_word.'”での検索結果 - ';
			bloginfo('name');
		} else {
			wp_title(' - ', true, 'right').bloginfo('name');
		}
	}

	#descriptionの設定
	function function_description() {
		if ( is_page() || is_single() ) {
			if ( get_field( 'meta-description' ) ) {
				echo the_field( 'meta-description' );
			} else {
				global $post;
				$digest = strip_tags($post->post_content);
				$digest = str_replace("\n", "", $digest);
				$digest = str_replace("\r", "", $digest);
				$digest = mb_substr($digest, 0, 100) . "...";
				echo $digest;
			}
		} else {
			echo 'このブログでは、主に「Web制作」の分野に関して、勉強していく中でわかったことやハマったこと、色々なサイトを利用していて気づいたことをメモしています。';
		}
	}

	#noindexの設定
	function function_noindex() {
		if ( is_author() || is_tag() || is_paged() || is_date() || is_search() ) {
			echo '<meta name="robots" content="noindex">';
		}
	}

	#oEmbed endpoint 検出用リンク停止（oEmbed サービス提供はしないが他のサイトの埋め込みは可能）
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

	#WP REST API リンク <http://www.example.com/wp-json/>; rel="https://api.w.org/"
	remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
	remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );

	#WordPressのバージョン情報を削除
	remove_action( 'wp_head', 'wp_generator' );

	#Really Simple Discovery用のリンク削除
	remove_action( 'wp_head', 'rsd_link' );

	#Windows Live Writer用のリンクを削除
	remove_action( 'wp_head', 'wlwmanifest_link' );

	#iframeによる埋め込みをレスポンシブ対応にする
	add_theme_support( 'responsive-embeds' );

?>

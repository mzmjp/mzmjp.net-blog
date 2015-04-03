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
	add_filter('posts_search_orderby', custom_posts_search_orderby);
	function custom_posts_search_orderby() {
		return ' post_date desc ';
	}
?>

			<footer class="mod-entry-footer">
				<div class="mod-entry-tag">
					<?php the_tags('<div class="mod-entry-tag-title">タグ：</div><ul class="mod-entry-tags"><li class="mod-entry-tagname">','</li><li class="mod-entry-tagname">','</li></ul>');?>
				</div>
				<p class="mod-entry-parmalink"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">「<?php the_title_attribute(); ?>」のパーマリンク</a></p>
			<!-- /.mod-entry-footer --></footer>

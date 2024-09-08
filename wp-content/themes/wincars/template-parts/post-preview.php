<div class="preview">
	<?php $post_preview = get_field('post_preview'); ?>
	<?php if ($post_preview) : ?>
		<div class="preview__img cover-img">
			<?php echo wp_get_attachment_image($post_preview, 'full'); ?>
			<div class="preview__img-deco">Прочетете статията</div>
		</div>
	<?php endif; ?>
	<div class="preview__date"><?php echo get_the_date('j F Y') . ' г.'; ?></div>
	<h3 class="preview__title">
		<a class="preview__title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<div class="preview__title-deco">
			<svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1 11L11 1M11 1H1M11 1V11" stroke="#FDFDFD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
	</h3>
	<div class="preview__text">
		<?php the_excerpt(); ?>
	</div>
</div>

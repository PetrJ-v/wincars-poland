<?php
$portfolio_page_url = get_field('portfolio_page', 'options');
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

$args = array(
	'show_option_none'   => __('No categories'),
	'show_option_all'    => false,
	'exclude'            => 1,
	'style'              => 'none',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'hierarchical'       => false,
	'title_li'           => '',
	'number'             => NULL,
	'hide_title_if_empty' => false,
	'separator'          => '',
); ?>
<div class="tabs">
	<?php if ($portfolio_page_url) : ?>
		<a href="<?php echo $portfolio_page_url; ?>">Visi</a>
	<?php endif; ?>
	<?php wp_list_categories($args); ?>
</div>

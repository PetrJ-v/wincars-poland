<?php
function get_template_name(){
	$page_template_slug = get_page_template_slug();
	$page_template = (empty($page_template_slug)) ? 'default' : $page_template_slug;
	return $page_template;
}

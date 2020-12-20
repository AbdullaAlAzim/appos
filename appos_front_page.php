<?php
/*
Template Name: Home
*/
get_header();
?>

<?php
if(function_exists('cs_get_option')) :
$section_settings = cs_get_option('home_section_sorter');
endif;

if(!empty($section_settings) && array_key_exists('enabled', $section_settings)){
	$sections = $section_settings['enabled'];
	while(current($sections)){
		get_template_part('sections/section', key($sections));
		next( $sections);
	}
}

get_footer();
 ?>
<?php

function smartr_custom_body_classes($classes){
	
	$show_slider = get_theme_mod('smartr_show_default_slider',false);
	
	$smartr_slider_type = get_theme_mod('smartr_slider_type','fullscreen');
	
	if($show_slider == true && $smartr_slider_type =='fullscreen' ){
		
		if(is_front_page() || is_home() ){
			
			$classes [] = 'body--'.$smartr_slider_type.'--slider';
	
		}
	
	}
	return $classes;
}

add_filter('body_class','smartr_custom_body_classes');


/*
*
* Index main container divs open 
*
*/

if (!function_exists('smartr_open_main_index_container_class'))  {
 function smartr_open_main_index_container_class(){
	 
	$return ='';
	$return .='<div class="container-fluid smartr-home">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-offset-2 col-sm-8 col-md-8 blog-no-sidebar">'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_open_main_index_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_index_before','smartr_open_main_index_container_class',2);
 }
  
/*
*
* Index main container divs close 
*
*/

if (!function_exists('smartr_close_main_index_container_class'))  {

 function smartr_close_main_index_container_class(){
	 $return ='';
	$return .='</div><!-- ./ col-md-8 -->'."\n";
	$return .='</div><!-- ./ row -->'."\n";
	$return .='</div><!-- ./ container -->'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_close_main_index_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_index_after','smartr_close_main_index_container_class',9);
 }

 /*
*
* Single page main layout containers open
*
*/

if (!function_exists('smartr_open_main_singular_container_class'))  {
 function smartr_open_main_singular_container_class(){
	 
	 $single_layout = get_theme_mod('smartr_single_layout','2col');
	 
	$return ='';

	$return .='<div class="container-fluid" id="smartr-single">'."\n";
	$return .='<div class="row">'."\n";
	if($single_layout == '2col'):
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 top75">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-9 col-md-9 blog-2col two-col-sidebar">'."\n";
	else:
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 blog-no-sidebar">'."\n";
	endif;
	
	$return = apply_filters( 'smartr_filter_smartr_open_main_singular_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_single_post_before','smartr_open_main_singular_container_class',2);
 }
 
 
 /*
*
* Single page main layout containers close
*
*/

if (!function_exists('smartr_close_main_singular_container_class'))  {

 function smartr_close_main_singular_container_class(){
	 
	  $single_layout = get_theme_mod('smartr_single_layout','2col');
	  
	 $return ='';
	 
	 if($single_layout == '2col'):
	  $return .='</div><!-- ./ col-md-9 blog-2col -->'."\n";
	 $return .='<div class="col-sm-3 col-md-3">'."\n";
	 
	 ob_start();
	 
	 get_sidebar('primary');
	 
	 $return .= ob_get_clean();
	 
	 $return .='</div><!-- ./col-md-4 -->'."\n";
	 
	 $return .='</div><!-- ./row inner -->'."\n";
	 $return .='</div><!-- ./col-md-10-offset-1 -->'."\n";
	 else:
	 $return .='</div><!-- ./col-md-10 blog-no-sidebar -->'."\n";
	 endif;
	 
	
	$return .='</div><!-- ./row outer -->'."\n";
	$return .='</div><!-- ./container -->'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_close_main_singular_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_single_post_after','smartr_close_main_singular_container_class',9);
 }
 
 
 /*
*
* Single page main layout containers open
*
*/

if (!function_exists('smartr_open_main_defaultpage_container_class'))  {
 function smartr_open_main_defaultpage_container_class(){
	 
	 $single_layout = get_theme_mod('smartr_defaultpage_layout','2col');
	 
	$return ='';

	$return .='<div class="container-fluid" id="smartr-single">'."\n";
	$return .='<div class="row">'."\n";
	
	if($single_layout == '2col'):
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 top75">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-9 col-md-9 page-2col">'."\n";
	else:
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 page-no-sidebar">'."\n";
	endif;
	
	$return = apply_filters( 'smartr_filter_smartr_open_main_defaultpage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_single_page_before','smartr_open_main_defaultpage_container_class',2);
 }
 
 
 /*
*
* Single page main layout containers close
*
*/

if (!function_exists('smartr_close_main_defaultpage_container_class'))  {

 function smartr_close_main_defaultpage_container_class(){
	  $single_layout = get_theme_mod('smartr_defaultpage_layout','2col');
	 $return ='';
	 
	 if($single_layout == '2col'):
	  $return .='</div><!-- ./ col-md-9 page-2col -->'."\n";
	 $return .='<div class="col-sm-3 col-md-3">'."\n";
	 
	 ob_start();
	 
	 get_sidebar('primary');
	 
	 $return .= ob_get_clean();
	 
	 $return .='</div><!-- ./col-md-4 -->'."\n";
	 
	 $return .='</div><!-- ./row inner -->'."\n";
	 $return .='</div><!-- ./col-md-10-offset-1 -->'."\n";
	 else:
	 $return .='</div><!-- ./col-md-10 page-no-sidebar -->'."\n";
	 endif;
	 
	
	$return .='</div><!-- ./row outer -->'."\n";
	$return .='</div><!-- ./container -->'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_close_main_defaultpage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_single_page_after','smartr_close_main_defaultpage_container_class',9);
 }
 
 /*
*
* Archives page main layout containers open
*
*/

if (!function_exists('smartr_open_main_archivespage_container_class'))  {
 function smartr_open_main_archivespage_container_class(){
	 
	 $archive_layout = get_theme_mod('smartr_archivespage_layout','2col');
	 
	$return ='';

	$return .='<div class="container-fluid top50" id="smartr-archives">'."\n";
	$return .='<div class="row">'."\n";
	
	if($archive_layout == '2col'):
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 two-col-sidebar">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-9 col-md-9 page-2col">'."\n";
	else:
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 page-no-sidebar">'."\n";
	endif;
	
	$return = apply_filters( 'smartr_filter_smartr_open_main_archivespage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_archive_page_before','smartr_open_main_archivespage_container_class',2);
 }
 
 
 /*
*
* Archives page main layout containers close
*
*/

if (!function_exists('smartr_close_main_archivespage_container_class'))  {

 function smartr_close_main_archivespage_container_class(){
	  $archive_layout = get_theme_mod('smartr_archivespage_layout','2col');
	 $return ='';
	 
	 if($archive_layout == '2col'):
	  $return .='</div><!-- ./ col-md-9 page-2col -->'."\n";
	 $return .='<div class="col-sm-3 col-md-3">'."\n";
	 
	 ob_start();
	 
	 get_sidebar('primary');
	 
	 $return .= ob_get_clean();
	 
	 $return .='</div><!-- ./col-md-4 -->'."\n";
	 
	 $return .='</div><!-- ./row inner -->'."\n";
	 $return .='</div><!-- ./col-md-10-offset-1 -->'."\n";
	 else:
	 $return .='</div><!-- ./col-md-10 page-no-sidebar -->'."\n";
	 endif;
	 
	
	$return .='</div><!-- ./row outer -->'."\n";
	$return .='</div><!-- ./container -->'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_close_main_archivespage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_archive_page_after','smartr_close_main_archivespage_container_class',9);
 }
 
 /*
*
* Search page main layout containers open
*
*/

if (!function_exists('smartr_open_main_searchpage_container_class'))  {
 function smartr_open_main_searchpage_container_class(){
	 
	 $search_layout = get_theme_mod('smartr_searchpage_layout','2col');
	 
	$return ='';

	$return .='<div class="container-fluid top50" id="smartr-search">'."\n";
	$return .='<div class="row">'."\n";
	
	if($search_layout == '2col'):
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 two-col-sidebar">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-9 col-md-9 page-2col">'."\n";
	else:
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10 page-no-sidebar">'."\n";
	endif;
	
	$return = apply_filters( 'smartr_filter_smartr_open_main_searchpage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_search_page_before','smartr_open_main_searchpage_container_class',2);
 }
 
 
 /*
*
* Search page main layout containers close
*
*/

if (!function_exists('smartr_close_main_searchpage_container_class'))  {

 function smartr_close_main_searchpage_container_class(){
	  $search_layout = get_theme_mod('smartr_searchpage_layout','2col');
	 $return ='';
	 
	 if($search_layout == '2col'):
	  $return .='</div><!-- ./ col-md-8 page-2col -->'."\n";
	 $return .='<div class="col-sm-3 col-md-3">'."\n";
	 
	 ob_start();
	 
	 get_sidebar('primary');
	 
	 $return .= ob_get_clean();
	 
	 $return .='</div><!-- ./col-md-4 -->'."\n";
	 
	 $return .='</div><!-- ./row inner -->'."\n";
	 $return .='</div><!-- ./col-md-10-offset-1 -->'."\n";
	 else:
	 $return .='</div><!-- ./col-md-10 page-no-sidebar -->'."\n";
	 endif;
	 
	
	$return .='</div><!-- ./row outer -->'."\n";
	$return .='</div><!-- ./container -->'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_close_main_searchpage_container_class', $return );
	
	echo $return;
 }
 add_action('smartr_search_page_after','smartr_close_main_searchpage_container_class',9);
 }
 
 /*
*
* Add a class in the footer container class if there are active footer widgets
*
*/
 
 function footer_active_sidebars_class(){
	 $class = is_active_sidebar( 'smartr-left-footer' ) || is_active_sidebar( 'smartr-left-footer' ) || is_active_sidebar( 'smartr-mid-footer' )   ? 'smartr-footer-with-widgets' : 'smartr-footer-without-widgets';
	 return $class;
 }
 
 
 
 
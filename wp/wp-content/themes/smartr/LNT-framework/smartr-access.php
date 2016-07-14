<?php

/**
 *  smartr main navigation
 * 
 * @author Level9themes
 **/
 
function smartr_access(){

	$return = '';
	$return .='<div class="navbar navbar-fixed-top navbar-default">'."\n";
	$return .='<div class="container-fluid">'."\n";
	$return .='<div class="row">'."\n";
	$return .='<div class="col-sm-offset-1 col-sm-10 col-md-10">'."\n";
	$return .='<div class="navbar-header">'."\n";
	$return .='<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">'."\n";
	$return .='<span class="icon-bar"></span>'."\n";
	$return .='<span class="icon-bar"></span>'."\n";
	$return .='<span class="icon-bar"></span>'."\n";
	$return .='</button>'."\n";
	$return .='<a class="navbar-brand" href="'.esc_url( home_url() ).'"><span>'."\n";
	
	if ( function_exists( 'the_custom_logo' ) ):
		
	$return .= the_custom_logo();
	
	else: 
	
		if (get_theme_mod( 'smartr_site_logo')) :
		
		$return .='<img alt="'.get_bloginfo('name').'" src="'.esc_url( get_theme_mod('smartr_site_logo') ).'" />'."\n";
	else:
	
		$return .= get_bloginfo('name')."\n";
		
	endif; 
		
	endif; 
	
	if (get_theme_mod( 'smartr_show_description',true) == true) :
		$return .='<span class="navbar-site-desc text-muted">'. get_bloginfo('description').'</span>'."\n";
	endif;
	$return .='</span></a>'."\n";
	$return .='</div>'."\n";
	$return .='<div class="navbar-collapse collapse">'."\n";
	$return .='<ul class="nav navbar-nav navbar-right">'."\n";
	if (has_nav_menu('primary')) :
		ob_start();
		$return .= do_action('smartr_main_menu_links_items_before')."\n";
		$args = array(
		'theme_location' => 'primary',
		'depth'		 => 2,
		'container'	 => '',
		'container_id'	 => '',
		'menu_class'	 => 'menu',
		'items_wrap' => '%3$s',
		'walker'	 => new smartr_bootstrap_navwalker()
		);
		wp_nav_menu($args);
		$return .= do_action('smartr_main_menu_links_items_after')."\n";
		$return .= ob_get_clean();
	else:
		if(current_user_can('manage_options')) :
		$return .='<li><a href="'.get_admin_url().'nav-menus.php">'.__('Set up Your Menu','smartr').'</a></li>'."\n";
		endif;
	endif;
	$return .='</ul>'."\n";
	$return .='</div>'."\n";
	$return .='</div>'."\n";
	$return .='</div>'."\n";
	$return .='</div>'."\n";
	$return .='</div>'."\n";
	$return .='<div class="clearfix"></div>'."\n";
	$return = apply_filters( 'smartr_filter_smartr_access', $return );
				
				echo $return;
}

add_action('smartr_header','smartr_access',3);

?>

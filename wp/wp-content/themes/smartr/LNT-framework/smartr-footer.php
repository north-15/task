<?php
/**
 * smartr-footer function
 *
 * @author Level9themes
 **/

function smartr_footer()
{

do_action('smartr_footer_content');

}


/**
 * Open main footer wrapper
 *
 * @author Level9themes
 **/
 
function smartr_open_footer_wrapper()
{
	$return ='<footer class="site-footer '.footer_active_sidebars_class().'" id="site-footer">'."\n";
	
$return = apply_filters( 'smartr_filter_smartr_open_footer_wrapper', $return );
	
	echo $return;
 }
 add_action('smartr_footer_content','smartr_open_footer_wrapper',1);

 
 /**
 * Close main footer wrapper
 *
 * @author Level9themes
 **/
 
function smartr_close_footer_wrapper()
{
	$return ='</footer>'."\n";
$return = apply_filters( 'smartr_filter_close_footer_wrapper', $return );
	
	echo $return;
 }
 add_action('smartr_footer_content','smartr_close_footer_wrapper',10);

 
 /**
 * Footer info
 *
 * @author Level9themes
 **/
 
 
function smartr_footer_info()
{
	 $dsn_url ='https://level9themes.com/';
	 
	$return = '';
	$return .= '<div class="clearfix"></div>'."\n";
    $return .= '<div class="footerInfo text-center">'."\n";
        $return .= '<div class="container-fluid">'."\n";
           $return .= ' <div class="row">'."\n";
                $return .= '<div class="col-sm-offset-2 col-sm-8 col-md-8">'."\n";
                    $return .= '<p>';
					
						$st_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

						$wplink = '<a href="' . 'http://wordpress.org' . '" target="_blank" title="' . esc_attr__( 'WordPress', 'smartr' ) . '"><span>' . __( 'WordPress', 'smartr' ) . '</span></a>';

						$desinger_link =  '<a href="'. esc_url($dsn_url) .'" target="_blank" title="'.esc_attr__( 'Level9themes', 'smartr' ).'" rel="designer"><span>'.__( 'Level9themes', 'smartr') .'</span></a>';

						$footer_text = sprintf( __( '&copy; %1$s %2$s.', 'smartr' ), date( 'Y' ), $st_link ).' '.sprintf( __( 'Powered by %s.', 'smartr' ), $wplink ).' '.sprintf( __( 'Theme: %1$s by %2$s.', 'smartr' ), 'Smartlr', $desinger_link );

					$return .= $footer_text ;
					
					$return .= '</p>'."\n";
                $return .= '</div>'."\n";
            $return .= '</div>'."\n";
        $return .= '</div>'."\n";
    $return .= '</div>'."\n";
$return = apply_filters( 'smartr_filter_smartr_footer_info', $return );
	
	echo $return;
 }
 add_action('smartr_footer_content','smartr_footer_info',9);
 
 
 /**
 * Footer nav
 *
 * @author Level9themes
 **/
 
function smartr_footer_nav()
{
	if (has_nav_menu('footer_nav')) :
	$return = '';
	
	$return .= '<div class="clearfix"></div>'."\n";
    $return .= '<div class="footerNav">'."\n";
        $return .= '<div class="container">'."\n";
            $return .= '<div class="row">'."\n";
                $return .= '<div class="col-sm-offset-1 col-sm-10 col-md-10">'."\n";
					$return .= '<ul class="footer-links">'."\n";
                      ob_start();
						$args = array(
						'theme_location' => 'footer_nav',
						'depth'		 => 2,
						'container'	 => '',
						'container_id'	 => '',
						'menu_class'	 => 'menu',
						'items_wrap' => '%3$s',
						//'walker'	 => new smartr_bootstrap_navwalker()
						);
						wp_nav_menu($args);
						$return .= ob_get_clean();
                    $return .= '</ul>'."\n";
                $return .= '</div>'."\n";
            $return .= '</div>'."\n";
        $return .= '</div>'."\n";
    $return .= '</div>'."\n";
$return = apply_filters( 'smartr_filter_smartr_footer_nav', $return );
	
	echo $return;
	endif;
 }
 //add_action('smartr_footer_content','smartr_footer_nav',8);
 
 
 /**
 * Footer widget areas
 *
 * @author Level9themes
 **/
 
function smartr_footer_widgets_area()
{	
	$return = '';
	$return .= '<div class="clearfix"></div>'."\n";
     $return .= '<div class="container-fluid" id="footer-widgets">'."\n";
        $return .= '<div class="row">'."\n";
            $return .= '<div class="col-sm-offset-1 col-sm-10 col-md-10">'."\n";
                $return .= '<div class="row">'."\n";
					ob_start();
					?>
                    <div class="col-sm-4 col-md-4">
					<?php echo get_sidebar('left-footer');?>
					</div>
					<div class="col-sm-4 col-md-4">
					<?php echo  get_sidebar('mid-footer');?>
					</div>
					<div class="col-sm-4 col-md-4">
					<?php echo get_sidebar('right-footer');?>
					</div>
					
					<?php
					$return .= ob_get_clean();
					
					$return .= '</div>'."\n";
					$return .= '</div>'."\n";
					$return .= '</div>'."\n";
					$return .= '</div>'."\n";
			$return = apply_filters( 'smartr_filter_smartr_footer_widgets_area', $return );
	echo $return;
	
 }
 add_action('smartr_footer_content','smartr_footer_widgets_area',7);
 
 
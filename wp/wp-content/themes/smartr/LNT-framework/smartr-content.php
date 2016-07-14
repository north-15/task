<?php

/**
 * Resize an image to specified dimensions
 * @return (string) path to product image or feature image
 */
function smatr_my_resize_image( $post_id=null, $width=null, $height=null, $crop=true ) {

    // get path to featured image
    $featured_image_id = get_post_thumbnail_id( $post_id );
    $featured_image_path = get_attached_file( $featured_image_id );

    // make sure the file exists and it's an image
    if ( file_exists( $featured_image_path ) ) {

        // Resize
        $img = wp_get_image_editor( $featured_image_path );
        if ( ! is_wp_error( $img ) ) {
            // only resize if height and width supplied
            if ( $width || $height ) {
                $img->resize( $width, $height, true );
                $wp_upload_dir = wp_upload_dir();
                $dir = wp_mkdir_p( $wp_upload_dir['path'] );
                $filename = $img->generate_filename( 'custom', $dir, NULL );
                $saved = $img->save( $filename );
                return $wp_upload_dir['url'] . '/' . $saved['file'];
            }
        }
    }
}




function smartr_post_galleries(){
	wp_enqueue_script('smartr-pretty-photo-js');
	wp_enqueue_script('smartr-pretty-photo-js-init');
	echo get_post_gallery();
}

/**
 * smartr_slider_template function
 *
 * @author Level9themes
 * since v 1.0.1
 **/
 
 function smartr_slider_options(){
	$slider_options = '';
	$slider_options .= 'data-cycle-pause-on-hover="true"'."\n";
	$slider_options .= 'data-slides=">li"'."\n";
	$slider_options .= 'data-cycle-fx="fade"'."\n";
	$slider_options .= 'data-cycle-timeout="5500"'."\n";
	$slider_options .= 'data-cycle-prev="#SLprev" '."\n";
	$slider_options .= 'data-cycle-next="#SLnext"'."\n";
	$return = apply_filters('smartr_filter_smartr_slider_options', $slider_options);
return $return;
 }
 
 
 /**
  * Full Screen Slider function
  *
  * @author Level9themes
  **/
 function smartr_full_screen_slider()
 {

 wp_enqueue_script('smartr-fs-slider');
 
 $smartr_slide_cat = get_theme_mod('smartr_slide_cats','1');
 
 $args  = array(
 'cat' => (int)$smartr_slide_cat,
 'posts_per_page' => 3
 );
 
 $the_query = new WP_Query( $args );
 
 $fposts = $the_query->found_posts;
 
 $fposts = $fposts-1;
 $return = '';
 
$return .= '<div class="lnt--full--height--slider clearfix">'."\n";
    $return .= '<div id="lnt-fs-header-carousel" data-interval="'.intval(get_theme_mod('smartr_slide_speed','5000')).'" data-ride="carousel" class="carousel slide carousel-fade">'."\n";
        $return .= '<div class="carousel--mask"></div>'."\n";
        $return .= '<!-- Indicators -->'."\n";
		
        $return .= '<ol class="carousel-indicators">'."\n";
         
			for($i = 0; $i <= $fposts; $i++)
			{
				$active = $i == 0 ? 'active' : '';
				
			 $return .= '<li data-target="#lnt-fs-header-carousel" class="'.$active.'" data-slide-to="'.$i.'"></li>'."\n";
		 
			}
           
        $return .= '</ol>'."\n";
		
        $return .= '<!-- Wrapper for slides -->'."\n";
        $return .= '<div class="carousel-inner" role="listbox">'."\n";
		
		// The Loop
			if ( $the_query->have_posts() ) :
			
			$count = 0;
			
			while ( $the_query->have_posts() ) : $the_query->the_post();
			
			
			
			$slide_active = $count == '0' ? 'active' : 'notActive';
			
			$image = smartr_get_the_Image(array('format'=>'array','size'=>'full'));
			
			if($image):
			
			$large = smartr_image_resize($image['src'], 1920, 1080, true , true, true);
			
			else:
			
			$large = '';
			
			endif;
		
            $return .= '<!-- #'.$count.'slide -->'."\n";
            $return .= '<div class="item '.$slide_active.'" id="slide-'.$count.'">'."\n";
                $return .= '<div style="background-image: url('.$large.')" class="bg--slide"></div>'."\n";
                $return .= '<div class="container-fluid inner--block">'."\n";
                    $return .= '<div class="row">'."\n";
                        $return .= '<div class="col-sm-8 col-md-8 col-sm-offset-2 text-center">'."\n";
                            $return .= '<h1 data-animation="animated fadeInDown">'.get_the_title().'</h1>'."\n";
                            $return .= '<h4 data-animation="animated fadeIn" class="top20">'.get_the_excerpt().'</h4>'."\n";
                            $return .= '<a href="'.esc_url(get_the_permalink()).'" data-animation="animated fadeInUp" class="CTABtn btn-'.esc_attr(get_theme_mod('smartr_slide_button_style','success')).' top30">'.esc_attr(__('Learn More','smartr')).'</a>'."\n";
                        $return .= '</div>'."\n";
                    $return .= '</div>'."\n";
                $return .= '</div>'."\n";
            $return .= '</div>'."\n";
            $return .= '<!-- #'.$count.' ./slide -->'."\n";
			
			$count++;
			
			endwhile;
			
			else:
				$return .='<article>'."\n";
				$return .='No posts were found'."\n";
				$return .='</article>'."\n";
			endif;

			// Reset Post Data
			wp_reset_postdata();
			
        $return .= '</div>'."\n";
    $return .= '</div>'."\n";
$return .= '</div>'."\n";
	
	$return = apply_filters( 'smartr_filter_smartr_full_screen_slider', $return );
	
	echo $return;

 }
  /**
  * Hero slider function
  *
  * 
  * @author Level9themes
  **/
 
 
function smartr_slider_template()
{
	
	global $post; 
	
	$smartr_slider_content = get_theme_mod('smartr_slider_content','custom_slides');
	
	
wp_enqueue_script('smartr-cycle');

$return = '';
	
$return .= '<div class="hero-slider">'."\n";	
$return .= '<div class="SLPagination">'."\n";
$return .= '<span id="SLprev" class="ls-prev"><i class="fa fa-angle-left"></i></span>'."\n";
$return .= '<span id="SLnext" class="ls-next"><i class="fa fa-angle-right"></i></span>'."\n";
$return .= '</div>'."\n";
$return .= '<ul class="cycle-slideshow"'."\n";
$return .= smartr_slider_options();
$return .= '>'."\n";	
	
	$smartr_slide_cat = get_theme_mod('smartr_slide_cats','1');
 
 $args  = array(
 'cat' => (int)$smartr_slide_cat,
 'posts_per_page' => 3
 );
 
 $the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) :
			$count = 0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
			
			$image = smartr_get_the_Image(array('format'=>'array','size'=>'full'));
			
			if($image):
			
			$large = smartr_image_resize($image['src'], 1920, 1080, true , true, true);
			
			else:
			
			$large = '';
			
			endif;
			
				$count ++;
				$return .= '<li>'."\n";	
				$return .= '<div id="home-hero" class="hero-style1 displayTable" style="background-image: url('.esc_url($large).')">'."\n";
				$return .= '<span class="hero-mask"></span>'."\n";	
				$return .= '<div class="home-hero valign-middle">'."\n";
				$return .= '<div class="container-fluid">'."\n";
				$return .= '<div class="row">'."\n";
				$return .= '<div class="col-sm-offset-1 col-sm-10 col-md-10 text-center">'."\n";
				$return .= '<h1>'.get_the_title().'</h1>'."\n";
				$return .= '<p class="slider-excerpt">'.get_the_excerpt().'</p>'."\n";
				$return .= '<p class="top40"><a href="'.esc_url(get_the_permalink()).'" class="CTABtn btn-'.esc_attr(get_theme_mod('smartr_slide_button_style','success')).'">'.__('Learn More','smartr').'</a></p>'."\n";
				$return .= '</div>'."\n";
				$return .= '</div>'."\n";
				$return .= '</div>'."\n";
				$return .= '</div>'."\n";
				$return .= '</div>'."\n";
				$return .= '</li>'."\n";
				
				endwhile;
			
			else:
				$return .='<article>'."\n";
				$return .='No posts were found'."\n";
				$return .='</article>'."\n";
			endif;

			// Reset Post Data
			wp_reset_postdata();

		
$return .= '</ul>'."\n";	
$return .= '</div>'."\n";	

$return = apply_filters( 'smartr_filter_smartr_slider_template', $return );
			
			echo $return;
			
}
	
function smatr_implement_slider()	{
	
	$smartr_slider_type = get_theme_mod('smartr_slider_type','fullscreen');
	
	if(is_front_page() && get_theme_mod('smartr_show_default_slider',false) == true ){
		
		if($smartr_slider_type == 'fullscreen'){
			
			smartr_full_screen_slider();
			
		}else{
			smartr_slider_template();
		}
		
	
	}elseif(is_home() && get_theme_mod('smartr_show_default_slider',false) == true && get_theme_mod('smartr_show_default_slider_on_home',false) == true) 	{
	
	if($smartr_slider_type == 'fullscreen'){
			
			smartr_full_screen_slider();
			
		}else{
			smartr_slider_template();
		}
	
}else{
	return;
}

}

add_action('smartr_content_before','smatr_implement_slider',5);



/**
 * * Hook a header on index main loop entries
 */


function smartr_add_header_before_front_entry_body(){
	if(has_post_format('quote')){
		return;
	}
	ob_start();	
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	
	$byline = sprintf(
		esc_html_x( 'By %s', 'post author', 'smartr' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	
	$class = is_single() ? 'text-left' : 'text-center post--lists';
	
	?>
	<header class="<?php echo $class;?>">
	<h2 <?php smartr_themes_attr( 'entry-title' ) ?>> <?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?></h2>
	<div class="postMeta">
	<span><?php echo $byline ; ?></span>
	<span><?php echo $time_string ;?></span>
	<span><?php comments_popup_link( esc_html__( 'Leave a comment', 'smartr' ), esc_html__( '1 Comment', 'smartr' ), esc_html__( '% Comments', 'smartr' ) );?></span>
	</div>
	</header>
	<?php
	return ob_get_clean();	
}


function _smartr_add_header_before_front_entry_body(){
	$return = smartr_add_header_before_front_entry_body();
echo apply_filters('smartr_filter_smartr_add_header_before_front_entry_body', $return);

}

add_action('smartr_front_entry_before_post_body','_smartr_add_header_before_front_entry_body',6);
add_action('smartr_single_entry_before_post_body','_smartr_add_header_before_front_entry_body',2);


/**
 * * Hook footer on index main loop entries
 */
 

function smartr_add_footer_on_front_entries(){
	if(has_post_format('quote')){
		return;
	}
	
	$rd = get_theme_mod('smartr_front_content_excerpt_content');
	
?>
<?php ob_start(); ?>

<?php if($rd == 'excerpt'): ?>
	<footer <?php smartr_themes_attr( 'entry-footer text-center' ); ?>>
	<a href="<?php the_permalink();?>" <?php smartr_themes_attr( 'readMore top40' );?>><?php _e('Read More','smartr');?></a>
	</footer>
<?php endif; ?>	

	<?php
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', __( 'Featured', 'smartr') );
	}
	?>
	<?php
	return ob_get_clean();	
}
function _add_footer_on_front_entries(){
	$return = smartr_add_footer_on_front_entries();
echo apply_filters('smartr_filter_add_footer_on_front_entries', $return);

}
add_action('smartr_front_entry_footer','_add_footer_on_front_entries',4);


function smartr_featured_media(){
	if(has_post_format('quote')){
		return;
	}
	 ob_start(); ?>
	 <div class="featuredMedia">
		<?php if(has_post_format('video')): ?>
		
		<?php echo smartr_themes_media_grabber(array('type'=>'video')); ?>
		
		<?php elseif(has_post_format('audio')): ?>
		
		<?php echo smartr_themes_media_grabber(array('type'=>'audio')); ?>
		
		<?php elseif(has_post_format('gallery')): ?>
		
		<?php smartr_post_galleries(); ?>
		
		<?php elseif(has_post_format('image')): ?>
		
		<?php /*do nothing */?>		
		<?php else: ?>
		<?php $image = smartr_get_the_Image(array('format'=>'array','size'=>'smartr_xlarge')); ?>
		<?php if($image):?>
		<?php if(!is_single()): ?>
		<a href="<?php echo esc_url(get_the_permalink());?>">
		<?php endif; ?>
		<img src="<?php echo esc_url($image['src']);?>" alt="" />
		<?php if(!is_single()): ?>
		</a>
		<?php endif; ?>
		<?php endif; ?>
		<?php endif; ?>
		
	 </div>
	 <?php
	 return ob_get_clean();	
}

function smartr__featured_media(){
	$return = smartr_featured_media();
	echo apply_filters('smartr_filter_add_footer_on_front_entries', $return);
}
add_action('smartr_front_entry_before_post_body','smartr__featured_media',4);
add_action('smartr_single_entry_before_post_body','smartr__featured_media',4);

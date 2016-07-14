<?php

/**
 * Smartlr home CTA
 *
 * @author Level9themes
 **/
 
function smartr_home_cta()
{
	if(get_theme_mod('smartr_show_cta',true) == true):
	
	wp_enqueue_script('smartr-stellar');
	
$return = '';

$return .= '<section class="parallax--cta clearfix" data-stellar-background-ratio="0.5" style="background-attachment: fixed; background-image: url('.get_theme_mod('smartr_cta_section_image',get_template_directory_uri() . '/images/business-1219868_1280.jpg').')">'."\n";
$return .= '<div class="cta--mask"></div>'."\n";
	$return .= '<div class="inner--block">'."\n";
		$return .= '<div class="container">'."\n";
			$return .= '<div class="row">'."\n";
				$return .= '<div class="col-sm-offset-3 col-sm-6 col-md-6 text-center">'."\n";
					$return .= '<h2>'.esc_attr(get_theme_mod('smartr_cta_section_header',__('Call to action main header','smartr'))).'</h2>'."\n";
				$return .= '<p>'.esc_textarea(get_theme_mod('smartr_cta_section_text',__('Just some placeholder text explaining what this call to action section is really about. Nulla dictum mauris ac nunc quislos pharetra cursus in non consequat','smartr'))).'</p>'."\n";				
				$return .= '<a href="'.esc_url(get_theme_mod('smartr_cta_btn_link','#')).'" class="CTABtn '.esc_attr(get_theme_mod('smartr_cta_section_button','btn-success')).' top30">'.esc_attr(get_theme_mod('smartr_cta_btn_text',__('Join us today!','smartr'))).'</a>'."\n";			
				$return .= '</div>'."\n";
			$return .= '</div>'."\n";
		$return .= '</div>'."\n";
	$return .= '</div>'."\n";	
$return .= '</section>'."\n";

$return = apply_filters( 'smartr_filter_smartr_home_cta', $return );
			
	echo $return;
	endif;
}

add_action('smartr_home_content','smartr_home_cta',2);



/**
 * Smartlr home latest posts
 *
 * @author Level9themes
 **/
 
function smartr_home_latest_posts()
{
	if(get_theme_mod('smartr_show_bs',true) == true):
	
global $post,$wp_query;

$args = array(
	'posts_per_page' => 6,
	);
	
$args = apply_filters('smartr_filter_smartr_home_latest_posts_args',$args);

$return = '';

$return .= '<section class="home--blog--section">	'."\n";
    $return .= '<div class="container">'."\n";
        $return .= '<div class="row">'."\n";
        $return .= '<div class="col-sm-10 col-md-10 col-sm-offset-1">'."\n";
     
		
			if(get_theme_mod('smartr_blog_section_header', __('Latest News From Our Blog','smartr'))):
          $return .= '<div class="row">'."\n";
                    $return .= '<header class="col-sm-12 col-md-12 text-center">'."\n";
                         $return .= '<h3>'.esc_attr(get_theme_mod('smartr_blog_section_header', __('Latest News From Our Blog','smartr'))).'</h3>'."\n";
                    $return .= '</header>'."\n";
                $return .= '</div>'."\n";
			endif;	
	
                $return .= '<div class="row top50">'."\n";
                   
				ob_start();
				$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) :
			$count = 0;
			while ( $the_query->have_posts() ) : $the_query->the_post();
				$count ++;
				$ex = get_the_excerpt();
				$new_ex = smartr_truncate($ex,50);
				
				$img = smartr_get_the_Image(array('format'=>'array','size'=>'full'));
				
				if(isset($img['src'])){
					$image = smartr_image_resize($img['src'],650,650,true,true,true);
				}else{
					$image = '';
				}
				
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
				
				?>
				<div class="col-sm-4 col-md-4">
                        <article <?php post_class('post');?>>
                            <?php if($image):?>
						<div class="featured-media">
							<img src="<?php echo esc_url($image);?>" alt="" />
						</div>
						<?php endif;?>
                            <div class="fading--mask"></div>
                            <div class="spp_details">
                                <div class="spp__reveal__content">
                                    <div class="spp__reveal">
                                     <?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
                                        <div class="post--entry--meta"><?php echo $byline;?> <?php echo $time_string;?></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
					<?php
					endwhile;
					endif;
					$return .= ob_get_clean();
					
	$return .= '</div>'."\n";
	
	
	
	$return .= '</div>'."\n";
	$return .= '</div>'."\n";
	$return .= '</div>'."\n";
$return .= '</section>'."\n";

$return = apply_filters( 'smartr_filter_smartr_home_latest_posts', $return );
			
			echo $return;
	endif;
}


add_action('smartr_home_content','smartr_home_latest_posts',3);


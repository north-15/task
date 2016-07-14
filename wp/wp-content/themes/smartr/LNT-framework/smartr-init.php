<?php

/**
 *  Define theme functions directory constants
 */
 
define('FRAMEWORK_FUNCTIONS', get_template_directory() . '/LNT-framework/');
define('FRAMEWORK_FUNCTIONS_URI', get_template_directory_uri() . '/LNT-framework/');

/**
 * Theme scripts and styles
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-scripts.php';
 
 /**
 *  Register theme sidebars
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-widget-areas.php';
 
  /**
 *  Theme menu functions
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-walker.php';
require FRAMEWORK_FUNCTIONS . 'smartr-access.php';
 
 
 /**
 *  Pagination
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-pagination.php';

/**
 *  Theme galleries
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-cleaner-gallery.php';

/**
 *  Theme media grabber
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-media-grabber.php';

/**
 *  Imahe resizer
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-image-resizer.php';

/**
 *  Post Images
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-get-the-image.php';

  /**
 *  Theme template tags
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-template-tags.php';

  /**
 *  Theme attrr
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-attributes.php';

   /**
 *  Theme extra function
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-utility.php';
 
 /*
* Theme customizer functions
*
*/

//Font-awesome icons class names.
require FRAMEWORK_FUNCTIONS . 'smartr-font-awesome-array.php';

// Helper library for the theme customizer.
require FRAMEWORK_FUNCTIONS . 'customizer/customizer-library/customizer-library.php';

// Define options for the theme customizer.
require FRAMEWORK_FUNCTIONS . 'customizer/customizer-options.php';

// Output inline styles based on theme customizer selections.
require FRAMEWORK_FUNCTIONS . 'customizer/styles.php';

// Additional filters and actions based on theme customizer selections.
require FRAMEWORK_FUNCTIONS . 'customizer/mods.php';


 /**
 *  Woocommerce compatibility function
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-woocommerce.php';

  /**
 *  Theme jetpack compatibility functions
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-jetpack.php';
 
  /**
 *  Theme layout functions
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-layouts.php';
 
  /**
 *  Theme content functions
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-content.php';

  /**
 *  Home content blocks
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-home-blocks.php';
 
  /**
 *  Theme footer functions
 */
 
require FRAMEWORK_FUNCTIONS . 'smartr-footer.php';
 
 
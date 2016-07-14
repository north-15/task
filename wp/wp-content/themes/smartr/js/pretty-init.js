jQuery(document).ready(function(){

jQuery(".gallery:first a[data-gal^='prettyPhoto'],.taxonomy-items-wrapper:first a[rel^='prettyPhoto']").prettyPhoto({
animation_speed:'normal',
deeplinking: true,
slideshow:3000, 
horizontal_padding: 20,
social_tools: false,
autoplay_slideshow: false

});

});
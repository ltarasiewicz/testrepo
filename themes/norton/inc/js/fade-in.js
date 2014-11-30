jQuery(document).ready(function($) { 
    
    animatePictures('.homestyle-tile, .stage, .picture-tile-group, \n\
    .homepage-picture, .large-image, .small-image, \n\
    .award-images');  
    
    
});

function animatePictures(selection) {
    elementsToAnimate = jQuery(selection);
    elementsToAnimate.hide().each(function(i) {
       jQuery(this).delay(i * 500).fadeIn(5000);
    });
}




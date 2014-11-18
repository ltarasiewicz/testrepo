jQuery(document).ready(function($) { 
    
    animatePictures('.homestyle-tile, .stage, .picture-tile-group, \n\
    .panel-row-style-homePage #gallery-1, .panel-row-style-myPages img, \n\
    .panel-row-style-myAwards img');  
    
    
});

function animatePictures(selection) {
    elementsToAnimate = jQuery(selection);
    elementsToAnimate.hide().each(function(i) {
       jQuery(this).delay(i * 500).fadeIn(5000);
    });
}




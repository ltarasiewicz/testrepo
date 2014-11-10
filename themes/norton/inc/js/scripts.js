jQuery(document).ready(function() {
    setTimeout(
    function() 
    {
        fixFlexsliderHeight();
    }, 1000);
    
});

jQuery(window).load(function() {
    fixFlexsliderHeight();
});

jQuery(window).resize(function() {
    fixFlexsliderHeight();
});

function fixFlexsliderHeight() {
    var targetHeight = jQuery('.flexslider').css('height');
    jQuery('.flex-viewport').attr('style', 'height:' + targetHeight + '!important;' + ' overflow: hidden; position: relative');
    
}
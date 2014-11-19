jQuery(document).ready(function() {  
    window.onresize = function(e) {
        adjustLeaderHeight();
    };    



    jQuery(window).load(function() {
        adjustLeaderHeight();
        var selector = jQuery('.rotating-leader img');
        selector.hide().each(function(i) {
        jQuery(this).delay(i * 500).fadeIn(5000);
    });

    });

    jQuery(window).resize(function() {
        adjustLeaderHeight();

    });

});


/*
 * Function that adjusts the height of the rotating leader on the home page
 */
function adjustLeaderHeight() {
    var targetHeight = jQuery('.flexslider').height();
    jQuery('.flex-viewport').height(targetHeight);
    jQuery('.flex-viewport').attr('style', 'min-height: ' + targetHeight + 'px' + ' !important;' + ' overflow: hidden; position: relative');   
    jQuery('.rotating-leader img').attr('style', 'height: ' + targetHeight / 4 + 'px' + ' !important');
}
jQuery(document).ready(function() {
    setTimeout(
    function() 
    {
        adjustLeaderHeight();

    }, 1000);

});

jQuery(window).load(function() {
    adjustLeaderHeight();

});

jQuery(window).resize(function() {
    adjustLeaderHeight();

});


/*
 * Function that adjusts the height of the rotating leader on the home page
 */
function adjustLeaderHeight() {
    var targetHeight = jQuery('.flexslider').css('height');
    targetHeight = parseInt(targetHeight, 10);
    jQuery('.flex-viewport').attr('style', 'height:' + targetHeight + 'px' + ' !important;' + ' overflow: hidden; position: relative');   
    jQuery('.rotating-leader img').attr('style', 'height: ' + targetHeight / 4 + 'px' + ' !important');
}

/*
 * Function that adjusts the height of the secondary project slider on a singel project page
 */
function adjustSecondaryProjectSliderHeight() {
    var targetHeight = jQuery('.single-project-slider').css('height');
    targetHeight = parseInt(targetHeight, 10);
    jQuery('.secondary-project-slider .flex-viewport').attr('style', 'height:' + targetHeight + 'px' + ' !important;' + ' overflow: hidden; position: relative');   
    jQuery('.secondary-project-slider img').attr('style', 'height: ' + targetHeight / 4 + 'px' + ' !important');
}
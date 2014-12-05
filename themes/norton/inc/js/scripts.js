jQuery(document).ready(function() {  
  
    jQuery(window).load(function() {
        adjustLeaderHeight();
        var selector = jQuery('.rotating-leader img');
        selector.hide().each(function(i) {
        jQuery(this).delay(i * 500).css('visibility', 'visible').fadeIn(5000);
    });

    });
    
    window.onresize = function(e) {
        adjustLeaderHeight();
    };  

});

/*
 * Function that adjusts the height of the rotating leader on the home page
 */
function adjustLeaderHeight() {
    var targetHeight = jQuery('.flexslider').height();
    jQuery('.flex-viewport').height(targetHeight);
    jQuery('.flex-viewport').attr('style', 'min-height: ' + targetHeight + 'px' + ' !important;' + ' overflow: hidden; position: relative');   
    jQuery('.rotating-leader img').attr('style', 'height: ' + targetHeight / 4 + 'px' + ' !important; visibility: visible');
    jQuery('.rotating-leader.project-single img').attr('style', 'height: ' + targetHeight / 5 + 'px' + ' !important; width: 100%; padding-bottom: 20px;' + ' visibility: visible');
}
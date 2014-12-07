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
    
    jQuery('a#project-leader-more').click(function() {
        jQuery('.rotating-leader').flexslider("next");
        jQuery('.flexslider').flexslider("next");
    });
    
    jQuery('.rotating-leader.project-single img').click(function() {
        var slideNo = jQuery(this).attr('class');
        var slideInt = parseInt(slideNo);
        jQuery('.flexslider').flexslider(slideInt);
        console.log(slideNo);
    });

});

/*
 * Function that adjusts the height of the rotating leader on the home page
 */
function adjustLeaderHeight() {
    var targetHeight = jQuery('.flexslider').height();
    jQuery('.flex-viewport').height(targetHeight);
    jQuery('.flex-viewport').attr('style', 'min-height: ' + targetHeight + 'px' + ' !important;' + ' overflow: hidden; position: relative');   
    jQuery('.box.homepage').attr('style', 'height: ' + targetHeight / 6 + 'px' + ' !important; visibility: visible; overflow: hidden');
    jQuery('.rotating-leader img').attr('style', 'height: ' + targetHeight / 4 + 'px' + ' !important; visibility: visible');
    jQuery('.rotating-leader.project-single img').attr('style', 'height: ' + (targetHeight / 5 - 13) + 'px' + ' !important; width: 100%; padding-bottom: 20px; box-sizing: content-box; display: block;' + ' visibility: visible');
}
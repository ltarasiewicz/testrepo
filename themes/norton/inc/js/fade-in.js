jQuery(document).ready(function($) { 
    if ( $('.homestyle-tile') ) {
        $('.homestyle-tile').hide();
        $('.homestyle-tile').each(function(i) {
                $(this).delay(i * 500).fadeIn(5000);         
        });        
    }
    
    $('#stage-1, #stage-2, #stage-3, #stage-4, #stage-5, #stage-6').hide();
    $('#stage-1, #stage-2, #stage-3, #stage-4, #stage-5, #stage-6').each(function(i) {
                $(this).delay(i * 500).fadeIn(5000);         
        });  
});




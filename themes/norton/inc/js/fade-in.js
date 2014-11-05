jQuery(document).ready(function($) { 
    if ( $('.homestyle-tile') ) {
        $('.homestyle-tile').hide();
        $('.homestyle-tile').each(function(i) {
                $(this).delay(i * 400).fadeIn(5000);         
        });        
    }   
});




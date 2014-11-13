jQuery(document).ready(function($) { 
    if ( $('.homestyle-tile') ) {
        $('.homestyle-tile').hide();
        $('.homestyle-tile').each(function(i) {
                $(this).delay(i * 500).fadeIn(5000);         
        });        
    }
    
    if ( $('.stage') ) {
        $('.stage').hide();
        $('.stage').each(function(i) {
                    $(this).delay(i * 500).fadeIn(5000);         
            });  
    }
    
    if ( $('.picture-tile-group') ) {
        $('.picture-tile-group').hide();
        $('.picture-tile-group').each(function(i) {
                    $(this).delay(i * 500).fadeIn(5000);         
            });  
    }    
});




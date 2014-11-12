// Slider functions
jQuery(document).ready(function($){$(window).load(function(){        

    $('.rotating-leader').flexslider({

        animation: "slide",
        direction: "vertical",
        animationLoop: true,
        controlNav: false,
        directionNav: false,
        slideshowSpeed: 7000,
        animationSpeed: 1000,
        startAt: 0,
        slideshow: true, 
        animationLoop: false,
        start: function(){
            var caption = $('.flexslider .flex-active-slide .flex-caption h2').text();  
            var link = $('.flexslider .flex-active-slide .flex-caption a').attr('href');
            $('.rotating-leader-caption h2').text(caption);
            $('.rotating-leader-caption a').attr('href', link);
        },
        after: function(){
            var caption = $('.flexslider .flex-active-slide .flex-caption h2').text();  
            var link = $('.flexslider .flex-active-slide .flex-caption a').attr('href');
            $('.rotating-leader-caption h2').text(caption);
            $('.rotating-leader-caption a').attr('href', link);            
        }  

    }); 
    
    $('.flexslider').flexslider({

            animation: "fade",              //String: Select your animation type, "fade" or "slide"
	    easing: "swing",                //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
	    direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
	    reverse: false,                 //{NEW} Boolean: Reverse the animation direction
	    animationLoop: false,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
	    smoothHeight: false,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
	    startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
	    slideshow: true,                //Boolean: Animate slider automatically
	    slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
	    animationSpeed: 1000,            //Integer: Set the speed of animations, in milliseconds
	    initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
	    randomize: false,               //Boolean: Randomize slide order
	    fadeFirstSlide: true,           //Boolean: Fade in the first slide when animation type is "fade"

	    // Usability features
	    pauseOnAction: false,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
	    pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
	    pauseInvisible: true,       		//{NEW} Boolean: Pause the slideshow when tab is invisible, resume when visible. Provides better UX, lower CPU usage.
	    useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
	    touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
            controlNav: false,
            directionNav: true, 
            sync: ".rotating-leader"
    });    
      
    
});
});





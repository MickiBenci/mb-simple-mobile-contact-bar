jQuery(window).ready(()=>{
    //JS FOR MOBILE BOTTOM BAR
    var bottomBar = jQuery('.mobile-icon-container');
    if(bottomBar){
       
       jQuery(document).ready(function() {
            if(jQuery(window).height() >jQuery('#footer-outer').offset().top) {
                bottomBar.addClass("no-sticky");
            }
        });
       jQuery(window).bind("scroll", function() {
            if(jQuery(window).height() >jQuery('#footer-outer').offset().top) {
               bottomBar.addClass("no-sticky");
            }
            if (jQuery(this).scrollTop() > -1) { //Fade in at a level of height
                bottomBar.removeClass("no-sticky");
                checkOffset();
            } 
            else {
               bottomBar.addClass("no-sticky");
            }
        });
        function checkOffset() {
            if(jQuery(bottomBar).offset().top +jQuery(bottomBar).height() >=jQuery('#footer-outer').offset().top) {
                bottomBar.addClass("no-sticky");
            }
            if(jQuery(window).scrollTop() +jQuery(window).height() <jQuery('#footer-outer').offset().top) {
                bottomBar.removeClass("no-sticky"); // restore when you scroll up
           }
        }
                    
    }
})
    

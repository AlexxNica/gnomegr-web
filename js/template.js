$(document).ready(function() {

    // Get browser  
    $.each($.browser, function(i) {
        $('body').addClass(i);
        return false;  
    });
    
    // Get OS
    var match = navigator.userAgent.toLowerCase().match(/(win|mac|linux)/);
    if (match) {
        $('body').addClass(match[0]);
    }

    
    /* Global search placeholder
     * ====================================================================== */
    
    var search_input = $('#s');
    var search_placeholder = search_input.attr('placeholder');
    
    if (!("placeholder" in document.createElement("input"))) {
        if(search_input.val() == '' || search_input.val() == search_placeholder) {
            search_input.addClass('placeholder').val(search_placeholder);
        }
        
        search_input.click(function() {
            if(search_input.hasClass('placeholder')) {
                search_input.val('').removeClass('placeholder');
            }
        });
        
        search_input.blur(function() {
            if(search_input.val() == '' || search_input.val() == search_placeholder) {
                search_input.addClass('placeholder').val(search_placeholder);
            }
        });        
    }    


/* Lightbox
     * ====================================================================== */
    
    $("#container a[href$='.jpg'], #container a[href$='.png']").fancybox({
        'transitionIn'  :   'elastic',
        'transitionOut' :   'elastic',
        'speedIn'       :   400, 
        'speedOut'      :   400, 
        'overlayShow'   :   true,
        'overlayOpacity':   0.4,
        'overlayColor'  :   '#000',
        'hideOnContentClick' : true
    });
    
    $(".play_youtube, .play_vimeo").click(function() {
        
        var href = this.href;
        
        
        if($(this).hasClass('play_youtube')) {
            href = this.href.replace(new RegExp("watch\\?v=", "i"), 'embed/')  + '?autoplay=1&html5=1';
        } else if($(this).hasClass('play_vimeo')) {
            href = this.href.replace(new RegExp("([0-9])","i"),'moogaloop.swf?clip_id=$1') + '&autoplay=1'
        }
        
        $.fancybox({
            'padding'       : 10,
            'autoScale'     : false,
            'transitionIn'  : 'none',
            'transitionOut' : 'none',
            'title'         : this.title,
            'width'         : 680,
            'height'        : 410,
            'href'          : href,
            'type'          : 'iframe',
            'hideOnContentClick' : false,
            'hideOnOverlayClick' : false
        });
        return false;
    });

});


});

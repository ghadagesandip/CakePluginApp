(function($) {

    $.fn.popupmenu = function(options){
        var selector_ele =  $(this).selector;
        var menuBox = selector_ele+"Box";
            $.fn.popupmenu.defaulOptions = {
//                'width'   : '50%',
//                'height'  : '50%',
//                'top'     : '50%',
//                'left'    : '50%'
            }

            var options = $.extend({}, $.fn.popupmenu.defaulOptions,options);

            $(selector_ele).click(function(){
               $(menuBox).animate({
                   width: [ "toggle", "swing" ],
                   height: [ "toggle", "swing" ],
                   opacity: "toggle"
               }, 300, "linear");
            });



    }

})(jQuery);
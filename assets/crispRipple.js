(function($) {
    'use strict';
    var els = $('.has-crr');
    return els.each(function () {
        var el = $(this);
        var color = el.css('background-color');
        el.attr('data-crr-hold', 1);
        var data = el.data('crr-hold');
        el.append('<div class="crisp-container" />').click(function(e){
            var container = el.find('.crisp-container');
            if ( e.target.tagName.toLowerCase() == 'button' || container.find('.crisp-ripple').length > 1 ) {
                return false;
            };
            data++;
            if ( data == 4 ) data = 1;
            el.attr('data-crr-hold', data);
            var pos = {
                x: e.pageX - el.offset().left,
                y: e.pageY - el.offset().top
            },
            // container = el.find('.crisp-container'),
            crisp = $('<div class="crisp-ripple" />'),
            size = Math.max( el.height(), el.width() ) * 3,
            bg,
            colors = el.data('crr-color').split('|');

            if ( data%3 == 0 ) {
                bg = colors.pop();
            } else if ( data%3 == 2 ) {
                bg = colors.shift();
            } else if ( data%3 == 1 ) {
                bg = color;
            }

            crisp.appendTo(container).css({
                'left': pos.x,
                'top': pos.y,
                'background-color': bg
            })

            setTimeout(function () {
                crisp.css({
                    'height': size,
                    'width': size
                }).on('transitionend', function () {
                    el.css('background-color', bg );
                    crisp.remove()
                })
            }, 0);
        })
    });
}(jQuery));

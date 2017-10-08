(function($) {
    'use strict';
    var el = $('.home-header');
    var color = el.css('background-color');
    el.attr('data-crr-hold', 0);
    var data = el.data('crr-hold');
    el.append('<div class="crisp-container" />').click(function () {
        data++;

        if ( data == 10 ) data = 0;
        
        el.attr('data-crr-hold', data);
    }).click((e) => {
        if ( e.target.tagName.toLowerCase() == 'button' ) {
            return false
        };
        var pos = {
            x: e.pageX - el.offset().left,
            y: e.pageY - el.offset().top
        },
        container = el.find('.crisp-container'),
        crisp = $('<div class="crisp-ripple" />'),
        size = Math.max( el.height(), el.width() ) * Math.PI;
        var bg = data%2 == 0 || data == 0 ? color : el.data('crr-color');

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
                el.css('background-color', crisp.css('background-color') );
                crisp.remove()
            })
        }, 1);
    })
}(jQuery));

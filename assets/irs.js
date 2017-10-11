;(function() {
    'use strict';
    //Initials
    //scroll
    $(window).scroll(function () {
        var scrolled = $(window).scrollTop();
        if ( scrolled > 1 ){
            $('#navigation').addClass('primary').removeClass('transparent')
        } else {
            $('#navigation').removeClass('primary').addClass('transparent')
        };
        $('.heroic-header>.content').css({
            'transform': 'translate3d(0, ' + scrolled/2.25 + 'px, 0)'
        })
    })
    //sidenav keyboard shortcut
    if ( $('.sidenav').length !== 0 ) {
        $(document).on('keyup', (e) => {
            if ( e.ctrlKey && e.which == 39 && !e.shiftKey && !e.altKey ) {
                if ( !$('.sidenav').hasClass('active') ) {
                    $('.sidenav').closest('.pui-nav').find('.sidenav-control').trigger('click')
                } else {
                    $('.sidenav').parent().find('.sidenav-overlay').trigger('click')
                }
            }
        })
    }
}());
+(function() {
    'use strict';
    $('.fs').each(function () {
        var fs = $(this);
        function clearItem(item) {
            item.removeClass('active');
        }
        function showItem(item) {
            item.addClass('active');
        }
        function __trg(e) {
            fs.parent().find('[data-fs-target=' + e +']').trigger('click')
        }

        for (var i = 0; i < fs.find('.fs-item').length; i++) {
            fs.find('.fs-indicators').append('<div class="item-link" data-fs-target="' + i +'" />')
        };
        fs.find('.fs-indicators .item-link').eq( fs.find('.fs-item').index( fs.find('.fs-item.active') ) ).addClass('active');
        var items = fs.find('.fs-item'),
        i_l = items.length;
        $(document).on('keyup', function (e) {
            e.stopPropagation();
            //(home: 36)(end: 35)
            //(up arrow: 38)(down arrow: 40)
            // if ( !/(35|36|37|39)/.test(e.which) ) return;
            if ( $('.pui-modal') && $('.pui-modal').hasClass('open') ) {
                return false;
            };
            var additional = e.ctrlKey || e.altKey || e.shiftKey ? true : false;
            // fs.parent().find('[data-fs-target=next]').trigger('click')
            if ( e.which == 36 && !additional ) {
                // fs.find('[data-fs-target=0]').trigger('click')
                __trg(0)
            } else if ( e.which == 35 && !additional ) {
                // fs.find('[data-fs-target=' + (i_l-1) + ']').trigger('click')
                __trg(i_l - 1)
            } else if ( e.which == 39 && !additional ) {
                // fs.parent().find('[data-fs-target=next]').trigger('click')
                __trg('next')
            } else if ( e.which == 37 && !additional ) {
                __trg('prev')
            } else if ( e.which > 95 && e.which < 106 && e.ctrlKey && e.altKey ) {
                __trg( e.which - 96 )
            } else if ( e.which > 47 && e.which < 58 && e.ctrlKey && e.altKey ) {
                __trg( e.which - 48 )
            }
        })
        fs.parent().find('[data-fs-target]').click(function () {
            const button = $(this);
            var items = fs.find('.fs-item'),
            index = items.index( fs.find('.fs-item.active') ),
            indicators = fs.find('.fs-indicators .item-link');
            var data = button.data('fs-target');
            if ( data == 'next' ) {
                index++;
                // items.eq(index-1).removeClass('active')
                clearItem( items.eq(index - 1) )
            } else if ( data == 'prev' ) {
                index--;
                // items.eq(index+1).removeClass('active')
                clearItem( items.eq(index + 1) )
            } else if ( typeof data == 'number' ) {
                // index = button.data('fs-target');
                var pp = index;
                clearItem( items.eq(pp) );
                index = data;
            }

            if ( index == items.length ){
                index = 0;
            }

            // items.eq(index).addClass('active')
            showItem( items.eq(index) )
            indicators.removeClass('active').eq( index ).addClass('active')

            if (fs.find('.fs-item.active').length > 1) {
                fs.find('.fs-item.active').eq(0).removeClass('active')
            }
        })
    })
}());
(function($) {
    'use strict';
    
}(jQuery));

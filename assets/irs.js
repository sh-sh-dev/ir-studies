;(function() {
    'use strict';
    //Initials
    //scroll
//    $('.box-container').scroll(function () {
//        var scrolled = $(this).scrollTop();
//        $('.heroic-header>.content').css({
//            'transform': 'translate3d(0, ' + scrolled/2.25 + 'px, 0)'
//        })
//    })
    //sidenav keyboard shortcut
    if ( $('.sidenav').length !== 0 ) {
        $(document).on('keyup', function(e){
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
function openMenu() {
    $('.sidenav').closest('.pui-nav').find('.sidenav-control').trigger('click')
}
+(function() {
    'use strict';
    $('.fs').each(function () {
        var fs = $(this);
        const resizeButtons = function() {
            var targets = fs.parent().find('.btn[data-fs-target]');
            // if (window.innerWidth < 768) {
            //     fs.parent().find('.btn[data-fs-target]').addClass('sm')
            // } else {
            //     fs.parent().find('.btn[data-fs-target]').removeClass('sm')
            // }
            // var breakpoints = [600, 768, 1000, 1200],
            // names = ['xs', 'sm', '', 'lg'],
            // current = window.innerWidth;
            function modify_class(el, d) {
                d = d.split(' ');
                for (var i = 0; i < d.length; i++) {
                    if ( d[i].charAt(0) == '-' && d[i].charAt(1) == '-' ) {
                        el.addClass(d[i].replace('--', ''))
                    } else {
                        el.removeClass(d[i])
                    }
                };
                return el;
            }
            var current = window.innerWidth;
            // if ( current < 600 ) {
            //     // targets.removeClass('sm').removeClass('md')
            //     modify_class(targets, 'sm lg md --xs')
            // }
            if ( current < 768 ) {
                modify_class(targets, 'lg md --sm')
            } else if ( current >= 768 && current < 1000 ) {
                modify_class(targets, 'lg sm --md')
            } else if (current > 1000) {
                modify_class(targets, 'sm md --lg')
            }
        };
        $(document).ready(resizeButtons);
        window.onresize = resizeButtons;
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
            var additional = e.ctrlKey || e.altKey || e.shiftKey ? true : false;
            if ( e.which == 36 && !additional ) {
                __trg(0)
            } else if ( e.which == 35 && !additional ) {
                __trg(i_l - 1)
            } else if ( e.which == 39 && !additional ) {
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
            if ( ($('.pui-modal')&&$('.pui-modal').hasClass('open')) ||
            ($('.sidenav')&&$('.sidenav').hasClass('active')) ) {
                return false;
            };
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
    var states = $('#states_list'),
    filter_handler = $('#states-filter');
    filter_handler.on('keyup change', function(){
        var $this = filter_handler,
        li = $('.states-list').find('li');
        for (var i = 0; i < li.length; i++) {
            var text = li.eq(i).find('a').text(),
            val = filter_handler.val();
            if ( text.toLowerCase().indexOf(val.toLowerCase()) == -1 ) {
                li.eq(i).hide();
            } else {
                li.eq(i).show();
            }
        }
    })
}(jQuery));
(function($) {
    'use strict';
    var players = $('.audio-player');
    return players.each(function() {
        function time(n) {
            var min = ~~(n/60);
            var sec = ~~(n%60);
            return min.toString() + ':' + sec.toString();
        }
        var player = $(this),
        audio = player.find('audio'),
        comps = {
            audio_toggle_button: $('<buttons class="btn fab sm material-icons primary simple">play_arrow</button>'),
            duration: {
                remained: $('<span class="remained-time" />'),
                elapsed: $('<span class="elapsed-time" />')
            },
            bigSlider: $('<div class="slider big-slider" />')
        };
        //pause
        player.append(comps.audio_toggle_button).append(comps.duration.remained)
        .append(comps.duration.elapsed)
        // .append(comps.bigSlider);
        comps.audio_toggle_button.materialRipple().on('click', function () {
            audio.toggleClass('playing');

            if ( audio.hasClass('playing') ) {
                audio[0].play()
            } else {
                audio[0].pause()
            }
        });
        var duration = audio[0].duration;
        noUiSlider.create(player.find('.big-slider')[0], {
            start: 40,
            connect: 'lower',
            range: {
                min: 0,
                max: document.querySelector('#au').duration
            }
        });
        audio.on('durationchange', function () {
            player.find('.remained-time').html(time(audio[0].currentTime));
        })
    })
}(jQuery));

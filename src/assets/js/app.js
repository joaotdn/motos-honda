import jQuery from 'jquery';
import 'what-input';
import WOW from './lib/wow';

// Foundation JS relies on a global varaible. In ES6, all imports are hoisted
// to the top of the file so if we used`import` to import Foundation,
// it would execute earlier than we have assigned the global variable.
// This is why we have to use CommonJS require() here since it doesn't
// have the hoisting behavior.
let $;
window.jQuery = jQuery;
$ = jQuery;
require('foundation-sites');
require('./lib/preload');
require('./lib/cycle');

// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
$(document).ready(function() {
    $('body').jpreLoader({
        loaderVPos: '0%',
        splashID: '#logo-footer',
        autoClose: true,
        showPercentage: true,
        closeBtnText: ''
    },function() {
        setTimeout(function () {
            $('#home-slideshow').removeClass('opacity-0');
        }, 100);

        const wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       0,          // default
                mobile:       true,       // default
                live:         true        // default
            }
        );
        wow.init();
    });
});

$(document).foundation();

(function () {
    $('*[data-toggle-menu], .main-menu-off > li > a').on('click', function (e) {
        e.preventDefault();
        $('.menu-offcanvas, .close-menu').toggleClass('active');
    });

    $( '.cycle-slideshow' ).on( 'cycle-after', function( event, opts ) {
        $('.slide-img, .slide-desc').addClass('show');
    });
    $( '.cycle-slideshow' ).on( 'cycle-initialized', function( event, opts ) {
        $('.slide-img, .slide-desc').addClass('show');
    });
    $( '.cycle-slideshow' ).on( 'cycle-before', function( event, opts ) {
        $('.slide-img, .slide-desc').removeClass('show');
    });
})();
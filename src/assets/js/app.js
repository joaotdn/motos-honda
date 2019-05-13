import $ from 'jquery';
import AOS from 'aos';
import 'what-input';
import {getProductName} from './lib/sendMyhonda';

window.jQuery = $;
require('foundation-sites');
require('./lib/preload');
require('./lib/cycle');

$(document).ready(function() {
    $('body').jpreLoader({
        loaderVPos: '0%',
        splashID: '#logo-footer',
        autoClose: true,
        showPercentage: true,
        closeBtnText: ''
    },function() {
        AOS.init();
    });
});

Foundation.Abide.defaults.patterns['cpf'] = /^([0-9]){11}$/;

$(document).foundation();

(function () {
    $('*[data-toggle-menu], .main-menu-off > li > a').on('click', function (e) {
        e.preventDefault();
        $('.menu-offcanvas, .close-menu').toggleClass('active');
    });

    $('.about-slide').cycle();

    $('*[data-bgimage]').each(function () {
        let dt = $(this).data('bgimage');
        $(this).css('backgroundImage', 'url('+ dt +')').addClass('bgcover');
    });

    $( '.cycle-slideshow' ).on( 'cycle-after', function() {
        $('.cycle-slide-active .slide-image, .cycle-slide-active .slide-text').addClass('show');
    });
    $( '.cycle-slideshow' ).on( 'cycle-initialized', function() {
        $('.cycle-slide-active .slide-image, .cycle-slide-active .slide-text').addClass('show');
    });
    $( '.cycle-slideshow' ).on( 'cycle-before', function() {
        $('.cycle-slide-active .slide-image, .cycle-slide-active .slide-text').removeClass('show');
    });

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 160) {
            $('.scroll-menu, .back-top').addClass('show');
        } else {
            $('.scroll-menu, .back-top').removeClass('show');
        }
    });

    // formulario myhonda
    getProductName();
})();
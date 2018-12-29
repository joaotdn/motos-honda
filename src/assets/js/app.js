import jQuery from 'jquery';
import 'what-input';

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
        console.log('teste');
    });
});

$(document).foundation();
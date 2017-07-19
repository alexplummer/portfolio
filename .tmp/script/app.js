'use strict';

var app = function () {
    'use strict';

    // Module JS

    var cl = function cl(content) {
        console.log(content);
    };

    // ajaxGet
    // ============
    // Makes an ajax request

    // Format:
    // ajaxGet(url, callback);

    // Imports
    // Module JS
    var ajaxGet = function ajaxGet(url, callback) {

        var request = new XMLHttpRequest();

        request.open('GET', url, true);

        request.onload = function () {

            if (this.status >= 200 && this.status < 400) {
                callback(this.response);
            } else {
                cl('ajaxGet failed');
            }
        };
        request.onerror = function () {
            cl('ajaxGet failed to connect');
        };

        request.send();
    };

    // inlineSVG
    // ============
    // Inlines SVGs to target through CSS

    // Imports
    // Module JS
    var inlineSVG = function inlineSVG() {
        var svgImg = document.querySelectorAll('.svg');

        var _loop = function _loop(i) {
            var img = svgImg[i];
            var imgClass = img.classList;

            ajaxGet(img.getAttribute('src'), buildInline);

            function buildInline(svg) {
                img.insertAdjacentHTML('afterend', svg);
                for (var j = 0; j < imgClass.length; j++) {
                    img.nextSibling.classList.add(imgClass[j]);
                }
                img.parentNode.removeChild(img);
            }
        };

        for (var i = 0; i < svgImg.length; i++) {
            _loop(i);
        }
    };

    // App
    // ============
    // All of JS is organised from here

    // Imports
    // Global object
    var globals$1 = globals$1 || {};
    // App JS
    inlineSVG();

    return globals$1;
}();
//# sourceMappingURL=app.js.map

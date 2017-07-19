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

    // Showreel
    // ============
    // Large section used to demo work

    // Imports
    // Slide Projects in from left
    var slideProjectsLeft = function slideProjectsLeft() {

        // init controller
        var controller = new ScrollMagic.Controller();

        // build scenes
        new ScrollMagic.Scene({ triggerElement: ".toggle-left" }).setClassToggle(".items-holder", "slide-in").triggerHook(1).addTo(controller);
    };

    // Swap projects set
    var swapProjects = function swapProjects() {
        var left = document.querySelector('.slider').querySelector('.toggle-left');
        var right = document.querySelector('.slider').querySelector('.toggle-right');

        left.addEventListener('click', function (e) {
            doSwap(e);
        });
        right.addEventListener('click', function (e) {
            doSwap(e);
        });

        function doSwap(e) {
            e.preventDefault();

            left.classList.toggle('active');
            right.classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-left').classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-right').classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-left').classList.toggle('inactive');
            document.querySelector('.slider').querySelector('.items-right').classList.toggle('inactive');
            document.querySelector('.slider').querySelector('.title').classList.toggle('right');
            document.querySelector('.slider').querySelector('.title').innerHTML = "SOME OF THE PRETTY STUFF";
            document.querySelector('.slider').querySelector('.right').innerHTML = "SOME OF THE TECHY STUFF";
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
    slideProjectsLeft();
    swapProjects();

    return globals$1;
}();
//# sourceMappingURL=app.js.map

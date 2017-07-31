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

    // Module JS
    var onReady = function onReady(method) {

        var readyStateCheckInterval = setInterval(function () {
            if (document && document.readyState === 'complete') {
                // or 'interactive'
                clearInterval(readyStateCheckInterval);
                method();
            }
        }, 10);
    };

    // Showreel
    // ============
    // Large section used to demo work

    // Imports
    // Slide Projects in from left
    var slideProjectsLeft = function slideProjectsLeft() {

        var waypoint = new Waypoint({
            element: document.querySelector('.toggle-left'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.querySelector('.items-holder').classList.toggle('slide-in');
                }
            },
            offset: '90%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.items-holder').classList.add('slide-in');
        }
    };

    // Swap projects set
    var swapProjects = function swapProjects() {
        var left = document.querySelector('.slider').querySelector('.toggle-left');
        var right = document.querySelector('.slider').querySelector('.toggle-right');
        var title = document.querySelector('.slider').querySelector('.title');

        left.addEventListener('click', function (e) {
            e.preventDefault();

            if (left.className.indexOf('active') < 1) {
                doSwap();
            }
        });
        right.addEventListener('click', function (e) {
            e.preventDefault();

            if (right.className.indexOf('active') < 1) {
                doSwap();
            }
        });

        function doSwap() {
            left.classList.toggle('active');
            right.classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-left').classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-right').classList.toggle('active');
            document.querySelector('.slider').querySelector('.items-left').classList.toggle('inactive');
            document.querySelector('.slider').querySelector('.items-right').classList.toggle('inactive');
            title.classList.toggle('right');

            if (title.className.indexOf('right') > -1) {
                title.innerHTML = "SOME OF THE TECHY STUFF";
            } else {
                title.innerHTML = "SOME OF THE PRETTY STUFF";
            }
        }
    };

    // Open and close previews
    var openPreview = function openPreview() {
        var itemsHolder = document.querySelector('.items-holder');
        var items = itemsHolder.querySelectorAll('li');
        var modal = document.querySelector('.project-modal');

        items.forEach(function (thisItem) {
            thisItem.addEventListener('click', function (e) {
                e.preventDefault();
                var scrollPosition = document.body.scrollTop;
                var screensDesktop = thisItem.querySelector('.desktop').querySelector('.screens').innerHTML;
                var screensMobile = thisItem.querySelector('.mobile').querySelector('.screens').innerHTML;
                var textContent = thisItem.querySelector('.content').innerHTML;
                var theBody = document.getElementsByTagName('body')[0];

                modal.querySelector('.desktop').querySelector('.screens').innerHTML = screensDesktop;
                modal.querySelector('.mobile').querySelector('.screens').innerHTML = screensMobile;
                modal.querySelector('.content').innerHTML = textContent;
                document.querySelector('.items-holder').classList.add('slide-in');

                theBody.classList.add('modal-active');
                document.body.style.top = scrollPosition * -1 + "px";

                modal.addEventListener('click', function (e) {
                    e.preventDefault();

                    if (e.target === document.querySelector('.project-modal') || e.target === document.querySelector('.close')) {
                        theBody.classList.remove('modal-active');
                        modal.classList.toggle('modal-inactive');
                        window.scrollTo(0, scrollPosition);
                        document.body.removeAttribute('style');
                    }
                });
            });
        });
    };

    // Heading splash
    // ============
    // Heading with a splash to the right or left

    // Imports
    // The first splash
    var doFirstSplash = function doFirstSplash() {

        var waypoint = new Waypoint({
            element: document.getElementById('first-splash'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.getElementById('first-splash').classList.toggle('splash-in');
                }
            },
            offset: '80%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.getElementById('first-splash').classList.add('splash-in');
        }
    };

    // The second splash
    var doSecondSplash = function doSecondSplash() {

        var waypoint = new Waypoint({
            element: document.getElementById('second-splash'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.getElementById('second-splash').classList.toggle('splash-in');
                }
            },
            offset: '80%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.getElementById('second-splash').classList.add('splash-in');
        }
    };

    // List skills
    // ============
    // Lists with icons to display skill levels

    // Imports
    // Slide Projects in from left
    var skillsSpin = function skillsSpin() {

        var waypoint = new Waypoint({
            element: document.querySelector('.list-skills'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.querySelector('.list-skills').classList.toggle('spin-in');
                }
            },
            offset: '10%'
        });

        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.list-skills').classList.add('spin-in');
        }
    };

    // News highlights
    // ============
    // Lists with icons to display skill levels

    // Slide Projects in from left
    var newsEntrance = function newsEntrance() {

        var waypoint = new Waypoint({
            element: document.querySelector('.news-highlights'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    console.log('ok');
                    document.querySelector('.news-highlights').classList.toggle('active');
                }
            },
            offset: '90%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.news-highlights').querySelector('.news-link').classList.toggle('active');
        }
    };

    // App
    // ============
    // All of JS is organised from here

    // Imports
    // Global object
    var globals$1 = globals$1 || {};

    // App JS
    onReady(function () {
        inlineSVG();
        slideProjectsLeft();
        swapProjects();
        doFirstSplash();
        doSecondSplash();
        skillsSpin();
        openPreview();
        newsEntrance();
    });

    return globals$1;
}();
//# sourceMappingURL=app.js.map

'use strict';

var app = function () {
    'use strict';

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

    // Module JS
    var hasClass = function hasClass(el, theClass) {
        var theSelector = void 0;

        // Decide what type of selector it is 
        if (document.getElementsByTagName(el)[0]) {
            theSelector = document.getElementsByTagName(el)[0];
        } else if (document.querySelector(el)) {
            theSelector = document.querySelector(el);
        }

        // Check to see if it contains the class
        if (theSelector.classList.contains(theClass)) {
            return true;
        }
        return false;
    };

    // Vertical nav
    // ============
    // Vertical nav for top of page

    // Slide Projects in from left
    var menuToggle = function menuToggle() {

        var theToggle = document.querySelector('.menu-toggle');

        theToggle.addEventListener('click', function (e) {
            e.preventDefault();

            var theBody = document.getElementsByTagName('body')[0];
            var scrollPosition = document.body.scrollTop;

            if (document.querySelector('.menu-toggle').classList.contains('open')) {
                theBody.classList.remove('modal-active');
                theToggle.classList.remove('open');
                document.querySelector('.nav-vertical').classList.remove('active');
                document.querySelector('.nav-vertical').classList.remove('offscreen');
                document.querySelector('.menu-toggle').classList.remove('active');
                scrollPosition = document.getElementsByTagName('body')[0].getAttribute('data-modal-scroll');
                window.scrollTo(0, scrollPosition);
            } else {
                theBody.classList.add('modal-active');
                theToggle.classList.add('open');
                document.querySelector('.nav-vertical').classList.add('active');
                document.getElementsByTagName('body')[0].setAttribute('data-modal-scroll', scrollPosition);
                document.body.style.top = scrollPosition * -1 + "px";

                setTimeout(function () {
                    document.querySelector('.nav-vertical').classList.add('offscreen');
                    document.querySelector('.menu-toggle').classList.add('active');
                }, 100);
            }
        });
    };

    // Slide nav in
    var navEntrance = function navEntrance() {

        var waypoint = new Waypoint({
            element: document.getElementsByTagName('body')[0],
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.querySelector('.menu-toggle').classList.toggle('inactive');
                    document.querySelector('.menu-toggle').classList.toggle('active');
                    document.querySelector('.nav-vertical').classList.toggle('offscreen');
                }
            },
            offset: '-70%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.menu-toggle').classList.toggle('inactive');
            document.querySelector('.menu-toggle').classList.toggle('active');
            document.querySelector('.nav-vertical').classList.toggle('offscreen');
        }
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
            offset: '120%'
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
                modal.classList.add('active');
                document.body.style.top = scrollPosition * -1 + "px";

                modal.addEventListener('click', function (e) {
                    e.preventDefault();

                    if (e.target === document.querySelector('.project-modal') || e.target === document.querySelector('.close')) {
                        theBody.classList.remove('modal-active');
                        window.scrollTo(0, scrollPosition);
                        modal.classList.remove('active');
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

    // List info
    // ============
    // Lists of info points with icon for each definition

    // Imports
    // Slide Projects in from left
    var infoSpin = function infoSpin() {

        var waypoint = new Waypoint({
            element: document.querySelector('.list-info'),
            handler: function handler(direction) {

                if (Waypoint.viewportWidth() > 768) {
                    document.querySelector('.list-info').classList.toggle('active');
                }
            },
            offset: '60%'
        });

        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.list-info').classList.add('spin-in');
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
                    document.querySelector('.news-highlights').classList.toggle('active');
                }
            },
            offset: '70%'
        });
        if (Waypoint.viewportWidth() <= 768) {
            document.querySelector('.news-highlights').querySelector('.news-link').classList.toggle('active');
        }
    };

    // Work modal
    // ============
    // (Write description here)

    // Imports
    // Module JS
    var enableScrollbar = function enableScrollbar() {
        var myScrollbar = new GeminiScrollbar({
            element: document.querySelector('.work-modal').querySelector('.content')
        }).create();
    };

    // Opens modal and starts slider
    var workModal = function workModal() {
        // Open & close modal
        var toggleWrap = document.querySelectorAll('.work-entry');
        var toggleList = Array.prototype.slice.call(toggleWrap);
        var modal = document.querySelector('.work-modal');
        var modalContentHolder = modal.querySelector('.content');
        var modalScreensHolder = modal.querySelector('.screens');

        toggleList.forEach(function (thisList) {
            var thisToggle = thisList.querySelector('.content').getElementsByTagName('a')[0];
            var thisScreens = thisList.querySelector('.screens');
            var modalContent = thisList.querySelector('.modal-content').innerHTML;
            var modalScreens = thisScreens.innerHTML;

            // Open screenshots on hover
            thisToggle.addEventListener('mouseenter', function () {
                thisScreens.classList.add('active');
            });

            thisToggle.addEventListener('mouseleave', function () {
                thisScreens.classList.remove('active');
            });

            // Open modal toggles
            thisToggle.addEventListener('click', function (e) {
                toggleModal(e);
            });

            thisScreens.addEventListener('click', function (e) {
                toggleModal(e);
            });

            function toggleModal(e) {
                e.preventDefault();
                var scrollPosition = document.body.scrollTop;
                document.getElementsByTagName('body')[0].classList.add('modal-active');
                modalContentHolder.innerHTML = modalContent;
                modalScreensHolder.innerHTML = modalScreens;
                modal.style.display = "block";
                document.body.style.top = scrollPosition * -1 + "px";
                enableScrollbar();
                modalSlider();

                // Close modal
                modal.querySelector('.close').addEventListener('click', function (e) {
                    document.getElementsByTagName('body')[0].classList.remove('modal-active');
                    modal.style.display = "none";
                    window.scrollTo(0, scrollPosition);
                    document.body.removeAttribute('style');
                });
            }
        });
    };

    // Modal slider
    var modalSlider = function modalSlider() {
        // Modal slider
        var screensWrap = document.querySelector('.screens');
        var screens = screensWrap.getElementsByTagName('div');
        var screensList = Array.prototype.slice.call(screens);
        var modal = document.querySelector('.work-modal');

        if (screens.length > 1) {
            (function () {
                // Reset controls
                document.querySelector('.controls').innerHTML = "";

                // Build controls
                screensList.forEach(function () {
                    document.querySelector('.controls').innerHTML += "<a href='#'></a>";
                    document.querySelector('.controls').getElementsByTagName('a')[0].classList.add('active');
                });

                // Add control for screens
                var controlsWrap = document.querySelector('.controls');
                var controls = controlsWrap.getElementsByTagName('a');
                var controlsList = Array.prototype.slice.call(controls);

                var _loop = function _loop(i) {

                    controls[i].addEventListener('click', function (e) {
                        e.preventDefault();
                        screensWrap.classList = 'screens';
                        screensWrap.classList.add('position-' + i);

                        controlsList.forEach(function (thisControl) {
                            thisControl.classList = "";
                        });

                        controls[i].classList.add('active');
                    });
                };

                for (var i = 0; i < controls.length; i++) {
                    _loop(i);
                }

                // Auto scroll
                var controlPosition = 0;

                var controlInterval = setInterval(function () {

                    // Set control position
                    controlPosition = controlPosition + 1;
                    if (controlPosition >= screens.length) controlPosition = 0;

                    // Update view
                    screensWrap.classList = 'screens';
                    screensWrap.classList.add('position-' + controlPosition);
                    controlsList.forEach(function (thisControl) {
                        thisControl.classList = "";
                    });
                    controls[controlPosition].classList.add('active');
                }, 3000);

                // Stop auto on hover
                controlsWrap.addEventListener('mouseenter', function () {
                    clearInterval(controlInterval);
                });
                modal.querySelector('.close').addEventListener('click', function (e) {
                    clearInterval(controlInterval);
                    screensWrap.classList = 'screens';
                });
            })();
        }
    };

    // App
    // ============
    // All of JS is organised from here

    // Imports
    // Global object
    var globals$1 = globals$1 || {};

    // Run App fns on ready
    onReady(function () {

        // Global fns
        menuToggle();
        navEntrance();

        // Home specific fns
        if (hasClass('body', 'home')) {
            slideProjectsLeft();
            swapProjects();
            doFirstSplash();
            doSecondSplash();
            skillsSpin();
            infoSpin();
            openPreview();
            newsEntrance();
        }

        // Work specific fns
        if (hasClass('body', 'work')) {
            workModal();
        }
    });

    return globals$1;
}();
//# sourceMappingURL=app.js.map

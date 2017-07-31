
// Showreel
// ============
// Large section used to demo work

// Imports
import { cl } from '../script/library/cl';

// Exports
export { slideProjectsLeft, swapProjects, openPreview };

// Slide Projects in from left
const slideProjectsLeft = function slideProjectsLeft() {

    let waypoint = new Waypoint({
        element: document.querySelector('.toggle-left'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.querySelector('.items-holder').classList.toggle('slide-in');
            }            
        },
        offset: '90%'
    });
    if (Waypoint.viewportWidth() <= 768) {
        document.querySelector('.items-holder').classList.add('slide-in');
    }
}

// Swap projects set
const swapProjects = function swapProjects() {
    let left = document.querySelector('.slider').querySelector('.toggle-left');
    let right = document.querySelector('.slider').querySelector('.toggle-right');
    let title = document.querySelector('.slider').querySelector('.title');

    left.addEventListener('click', (e) => {
        e.preventDefault();

        if (left.className.indexOf('active') < 1) {
            doSwap();
        }
    });
    right.addEventListener('click', (e) => {
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
        }
        else {
            title.innerHTML = "SOME OF THE PRETTY STUFF";
        }
    }
}

// Open and close previews
const openPreview = function openPreview() {
    let itemsHolder = document.querySelector('.items-holder');
    let items = itemsHolder.querySelectorAll('li');
    let modal = document.querySelector('.project-modal');

    items.forEach((thisItem) => {
        thisItem.addEventListener('click', (e) => {
            e.preventDefault();
            let scrollPosition = document.body.scrollTop;
            let screensDesktop = thisItem.querySelector('.desktop').querySelector('.screens').innerHTML;
            let screensMobile  = thisItem.querySelector('.mobile').querySelector('.screens').innerHTML;
            let textContent    = thisItem.querySelector('.content').innerHTML;
            let theBody        = document.getElementsByTagName('body')[0];

            modal.querySelector('.desktop').querySelector('.screens').innerHTML = screensDesktop;
            modal.querySelector('.mobile').querySelector('.screens').innerHTML = screensMobile;
            modal.querySelector('.content').innerHTML = textContent;
            document.querySelector('.items-holder').classList.add('slide-in');
            
            theBody.classList.add('modal-active');
            document.body.style.top = (scrollPosition * -1) + "px";

            modal.addEventListener('click', (e) => {
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
}


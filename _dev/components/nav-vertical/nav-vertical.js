
// Vertical nav
// ============
// Vertical nav for top of page

import { cl } from '../script/library/cl';

// Exports
export { menuToggle, navEntrance };

// Slide Projects in from left
const menuToggle = function menuToggle() {
    
    let theToggle = document.querySelector('.menu-toggle');
    
    theToggle.addEventListener('click', (e)=> {
        e.preventDefault();

        let theBody        = document.getElementsByTagName('body')[0];
        let scrollPosition = document.body.scrollTop;
        
        if (document.querySelector('.menu-toggle').classList.contains('open')) {
            theBody.classList.remove('modal-active');
            theToggle.classList.remove('open');
            document.querySelector('.nav-vertical').classList.remove('active');
            document.querySelector('.nav-vertical').classList.remove('offscreen');
            document.querySelector('.menu-toggle').classList.remove('active');
            scrollPosition = document.getElementsByTagName('body')[0].getAttribute('data-modal-scroll');
            window.scrollTo(0, scrollPosition);
        }
        else {
            theBody.classList.add('modal-active');
            theToggle.classList.add('open');
            document.querySelector('.nav-vertical').classList.add('active');
            document.getElementsByTagName('body')[0].setAttribute('data-modal-scroll',scrollPosition);
            document.body.style.top = (scrollPosition * -1) + "px";

            setTimeout(()=>{
                document.querySelector('.nav-vertical').classList.add('offscreen');
                document.querySelector('.menu-toggle').classList.add('active');
            }, 100);
        }
    });
}

// Slide nav in
const navEntrance = function navEntrance() {

    let waypoint = new Waypoint({
        element: document.getElementsByTagName('body')[0],
        handler: function (direction) {

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
}
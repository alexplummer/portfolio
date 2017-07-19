
// Showreel
// ============
// Large section used to demo work

// Imports
import { cl } from '../script/library/cl';

// Exports
export { slideProjectsLeft, swapProjects };

// Slide Projects in from left
const slideProjectsLeft = function slideProjectsLeft() {

    // init controller
    let controller = new ScrollMagic.Controller();

    // build scenes
    new ScrollMagic.Scene({ triggerElement: ".toggle-left" })
        .setClassToggle(".items-holder", "slide-in")
        .triggerHook(1)
        .addTo(controller);
}

// Swap projects set
const swapProjects = function swapProjects() {
    let left = document.querySelector('.slider').querySelector('.toggle-left');
    let right = document.querySelector('.slider').querySelector('.toggle-right');

    left.addEventListener('click', (e) => {
        doSwap(e);
    });
    right.addEventListener('click', (e) => {
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
}

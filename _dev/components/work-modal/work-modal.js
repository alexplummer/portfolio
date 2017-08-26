
// Work modal
// ============
// (Write description here)

// Imports
import { cl } from 'library/cl';

// Exports
export { workModal };

// Module JS
const enableScrollbar = function enableScrollbar() {
    let myScrollbar = new GeminiScrollbar({
        element: document.querySelector('.work-modal').querySelector('.content')
    }).create();
}

// Opens modal and starts slider
const workModal = function workModal() {
    // Open & close modal
    let toggleWrap = document.querySelectorAll('.work-entry');
    let toggleList = Array.prototype.slice.call(toggleWrap);
    let modal = document.querySelector('.work-modal');
    let modalContentHolder = modal.querySelector('.content');
    let modalScreensHolder = modal.querySelector('.screens');

    toggleList.forEach((thisList) => {
        let thisToggle = thisList.querySelector('.content').getElementsByTagName('a')[0];
        let thisScreens = thisList.querySelector('.screens');
        let modalContent = thisList.querySelector('.modal-content').innerHTML;
        let modalScreens = thisScreens.innerHTML;

        // Open screenshots on hover
        thisToggle.addEventListener('mouseenter', () => {
            thisScreens.classList.add('active');
        });

        thisToggle.addEventListener('mouseleave', () => {
            thisScreens.classList.remove('active');
        });

        // Open modal toggles
        thisToggle.addEventListener('click', (e) => {
            toggleModal(e);
        });

        thisScreens.addEventListener('click', (e) => {
            toggleModal(e);
        });

        function toggleModal(e) {
            e.preventDefault();
            let scrollPosition = document.body.scrollTop;
            document.getElementsByTagName('body')[0].classList.add('modal-active');
            modalContentHolder.innerHTML = modalContent;
            modalScreensHolder.innerHTML = modalScreens;
            modal.style.display = "block";
            document.body.style.top = (scrollPosition * -1) + "px";
            enableScrollbar();
            modalSlider();

            // Close modal
            modal.querySelector('.close').addEventListener('click', (e) => {
                document.getElementsByTagName('body')[0].classList.remove('modal-active');
                modal.style.display = "none";
                window.scrollTo(0, scrollPosition);
                document.body.removeAttribute('style');
            });
        }
    });
}

// Modal slider
const modalSlider = function modalSlider() {
    // Modal slider
    let screensWrap = document.querySelector('.screens')
    let screens = screensWrap.getElementsByTagName('div');
    let screensList = Array.prototype.slice.call(screens);
    let modal = document.querySelector('.work-modal');

    if (screens.length > 1) {
        // Reset controls
        document.querySelector('.controls').innerHTML = "";

        // Build controls
        screensList.forEach(() => {
            document.querySelector('.controls').innerHTML += "<a href='#'></a>";
            document.querySelector('.controls').getElementsByTagName('a')[0].classList.add('active');
        });

        // Add control for screens
        let controlsWrap = document.querySelector('.controls');
        let controls = controlsWrap.getElementsByTagName('a');
        let controlsList = Array.prototype.slice.call(controls);

        for (let i = 0; i < controls.length; i++) {

            controls[i].addEventListener('click', (e) => {
                e.preventDefault();
                screensWrap.classList = ('screens');
                screensWrap.classList.add('position-' + i);

                controlsList.forEach((thisControl) => {
                    thisControl.classList = "";
                });

                controls[i].classList.add('active');
            });
        };

        // Auto scroll
        let controlPosition = 0;

        let controlInterval = setInterval(() => {
           
            // Set control position
            controlPosition = controlPosition + 1;
            if (controlPosition >= screens.length) controlPosition = 0;

            // Update view
            screensWrap.classList = ('screens');
            screensWrap.classList.add('position-' + controlPosition);
            controlsList.forEach((thisControl) => {
                thisControl.classList = "";
            });
            controls[controlPosition].classList.add('active');
        }, 3000);

        // Stop auto on hover
        controlsWrap.addEventListener('mouseenter', () => {
            clearInterval(controlInterval);
        });
        modal.querySelector('.close').addEventListener('click', (e) => {
            clearInterval(controlInterval);
            screensWrap.classList = ('screens');
        });
    }
}

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

    // Accesibilty related
    let keyHandle;
    let tabHandle;
    let disabledHandle;
    let hiddenHandle;
    let focusedElementBeforeDialogOpened;

    toggleList.forEach((thisList) => {
        let thisToggle = thisList.querySelector('.content').querySelector('.modal-toggle');
        let thisScreens = thisList.querySelector('.screens');
        let modalContent = thisList.querySelector('.modal-content').innerHTML;
        let modalScreens = thisScreens.innerHTML.replace(/data-/g,'');

        // Open screenshots on hover
        thisToggle.addEventListener('mouseenter', () => {
            thisScreens.classList.add('active');
        });

        thisToggle.addEventListener('mouseleave', () => {
            thisScreens.classList.remove('active');
        });

        // Add keyboard interation
        thisToggle.addEventListener("keyup", function(e) {
            e.preventDefault();
            if (e.keyCode === 13) {
                thisToggle.click();
            }
        });

        // Open modal toggles
        thisToggle.addEventListener('click', (e) => {
            
            if (thisToggle.parentNode.parentNode.parentNode.classList.contains('mobile')) {
                toggleModal(e, true);
            }
            else {
                toggleModal(e, false);
            }

            focusedElementBeforeDialogOpened = document.activeElement;
        });

        thisScreens.addEventListener('click', (e) => {
            
            if (thisToggle.parentNode.parentNode.parentNode.classList.contains('mobile')) {
                toggleModal(e, true);
            }
            else {
                toggleModal(e, false);
            }

            focusedElementBeforeDialogOpened = document.activeElement;
        });

        function toggleModal(e, check) {
            e.preventDefault();
            let scrollPosition = window.pageYOffset;

            // Set tabbale els
            let element = ally.query.firstTabbable({
                context: modal, 
                defaultToContext: true,
            });

            // Disable els outside of modal
            disabledHandle = ally.maintain.disabled({
                filter: modal,
            });

            // Remove els outside of modal from accessibilty tree
            hiddenHandle = ally.maintain.hidden({
                filter: modal,
            });

            // Trap focus to modal
            tabHandle = ally.maintain.tabFocus({
                context: modal,
            });

            // React to enter and escape keys as mandated by ARIA Practices
            keyHandle = ally.when.key({
                escape: closeModal,
            });

            modal.hidden = false;

            // Get content and display modal
            document.getElementsByTagName('body')[0].classList.add('modal-active');

            if (check === true) {
                modal.classList.add('v-mobile');
            }
            modalContentHolder.innerHTML = modalContent;
            modalScreensHolder.innerHTML = modalScreens;
            modal.style.display = "block";
            document.body.style.top = (scrollPosition * -1) + "px";
            enableScrollbar();
            modalSlider();

            // Close modal
            modal.querySelector('.close').addEventListener('click', (e) => {
                closeModal();
            });

            function closeModal() {
                // Annoying hack for mobile to approx scrollto = 0
                setTimeout(()=>{
                    let newContent = document.createElement('div');
                    let screenshots = document.querySelector('.screenshots');

                    newContent.classList.add('content');
                    modalContentHolder.parentNode.removeChild(modalContentHolder);
                    screenshots.parentNode.insertBefore(newContent, screenshots);
                    modalContentHolder = modal.querySelector('.content');
                }, 100);

                document.getElementsByTagName('body')[0].classList.remove('modal-active');
                modal.style.display = "none";
                window.scrollTo(0, scrollPosition);
                document.body.removeAttribute('style');
            
                modalScreensHolder.innerHTML = "";
                document.querySelector('.controls').innerHTML = "";
                modal.classList.remove('v-mobile');

                // Remove any active screens
                let allScreens = document.querySelectorAll('.screens');
                allScreens = Array.prototype.slice.call(allScreens);

                allScreens.forEach((thisScreen) => {
                    thisScreen.classList.remove('active');
                });

                // Accessibilty related

                // undo listening to keyboard
                keyHandle.disengage();
                
                // undo trapping Tab key focus
                tabHandle.disengage();

                // undo hiding elements outside of the dialog
                hiddenHandle.disengage();

                // undo disabling elements outside of the dialog
                disabledHandle.disengage();

                // return focus to where it was before we opened the dialog
                focusedElementBeforeDialogOpened.focus();

                // hide or remove the dialog
                modal.hidden = true;
            }
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
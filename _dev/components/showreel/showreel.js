
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
        offset: '120%'
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

            // Set tabindex for left
            let leftItems = document.querySelector('.items-left').getElementsByTagName('li');
            let rightItems = document.querySelector('.items-right').getElementsByTagName('li');

            leftItems = Array.prototype.slice.call(leftItems);
            rightItems = Array.prototype.slice.call(rightItems);

            // Set tabindex for left
            leftItems.forEach((thisItem) => {
                thisItem.tabIndex = "-1";
            });

            // Set tabindex for right
            rightItems.forEach((thisItem) => {
                thisItem.tabIndex = "0";
            });
        }
        else {
            title.innerHTML = "SOME OF THE PRETTY STUFF";

            // Set tabindex for left
            let leftItems = document.querySelector('.items-left').getElementsByTagName('li');
            let rightItems = document.querySelector('.items-right').getElementsByTagName('li');

            leftItems = Array.prototype.slice.call(leftItems);
            rightItems = Array.prototype.slice.call(rightItems);

            // Set tabindex for left
            leftItems.forEach((thisItem) => {
                thisItem.tabIndex = "0";
            });

            // Set tabindex for right
            rightItems.forEach((thisItem) => {
                thisItem.tabIndex = "-1";
            });
        }
    }
}

// Open and close previews
const openPreview = function openPreview() {
    let modal = document.querySelector('.project-modal');
    let itemsHolder = document.querySelector('.items-holder');
    let items = itemsHolder.querySelectorAll('li');

    // Accesibilty related
    let keyHandle;
    let tabHandle;
    let disabledHandle;
    let hiddenHandle;
    let focusedElementBeforeDialogOpened;

    items.forEach((thisItem) => {

        // Add keyboard interation
        thisItem.addEventListener("keyup", function(e) {
            e.preventDefault();
            if (e.keyCode === 13) {
                thisItem.click();
            }
        });

        thisItem.addEventListener('click', (e) => {
            e.preventDefault();
            let scrollPosition = window.pageYOffset;
            let screensDesktop = thisItem.querySelector('.desktop').querySelector('.screens').innerHTML;
            let screensMobile = thisItem.querySelector('.mobile').querySelector('.screens').innerHTML;
            let textContent = thisItem.querySelector('.content').innerHTML;
            let theBody = document.getElementsByTagName('body')[0];
            
            focusedElementBeforeDialogOpened = document.activeElement;

            // Show modal
            theBody.classList.add('modal-active');
            modal.classList.add('active');
            document.body.style.top = (scrollPosition * -1) + "px";

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

            // Add content
            modal.querySelector('.desktop').querySelector('.screens').innerHTML = screensDesktop;
            modal.querySelector('.mobile').querySelector('.screens').innerHTML = screensMobile;
            modal.querySelector('.content').innerHTML = textContent;
            document.querySelector('.items-holder').classList.add('slide-in');

            // Close modal
            modal.addEventListener('click', (e) => {
                
                if (e.target === document.querySelector('.project-modal') || e.target === document.querySelector('.close')) {
                    e.preventDefault();
                    closeModal();
                }
            });

            function closeModal() {
                theBody.classList.remove('modal-active');
                window.scrollTo(0, scrollPosition);
                modal.classList.remove('active');
                document.body.removeAttribute('style');

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
        });
    });
}


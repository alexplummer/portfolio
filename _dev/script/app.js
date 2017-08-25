
// App
// ============
// All of JS is organised from here

// Imports
import { cl } from 'library/cl';
import { onReady } from 'library/onReady';
import { hasClass } from 'library/checkClass';
import { menuToggle, navEntrance } from '../components/nav-vertical/nav-vertical';
import { slideProjectsLeft, swapProjects, openPreview } from '../components/showreel/showreel';
import { doFirstSplash, doSecondSplash } from '../components/heading-splash/heading-splash';
import { skillsSpin } from '../components/list-skills/list-skills';
import { infoSpin } from '../components/list-info/list-info';
import { newsEntrance } from '../components/news-highlights/news-highlights';
import { workModal } from '../components/work-modal/work-modal';


// Exports
export default globals;

// Global object
let globals = globals || {};

// Run App fns on ready
onReady(() => {

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
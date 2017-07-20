
// App
// ============
// All of JS is organised from here

// Imports
import { cl } from 'library/cl';
import { inlineSVG } from 'library/inlineSVG';
import { onReady } from 'library/onReady';
import { slideProjectsLeft, swapProjects } from '../components/showreel/showreel';
import { doFirstSplash, doSecondSplash } from '../components/heading-splash/heading-splash';
import { skillsSpin } from '../components/list-skills/list-skills';

// Exports
export default globals;

// Global object
let globals = globals || {};

// App JS
onReady(() => {
    inlineSVG();
    slideProjectsLeft();
    swapProjects();
    doFirstSplash();
    doSecondSplash();
    skillsSpin();
});
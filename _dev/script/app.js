
// App
// ============
// All of JS is organised from here

// Imports
import { cl } from 'library/cl';
import { inlineSVG } from 'library/inlineSVG';
import { slideProjectsLeft, swapProjects } from '../components/showreel/showreel';

// Exports
export default globals;

// Global object
let globals = globals || {};

// App JS
inlineSVG();
slideProjectsLeft();
swapProjects();
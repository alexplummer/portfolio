
// Heading splash
// ============
// Heading with a splash to the right or left

// Imports
import { cl } from '../script/library/cl';

// Exports
export { doFirstSplash, doSecondSplash };

// The first splash
const doFirstSplash = function doFirstSplash() {

    let waypoint = new Waypoint({
        element: document.getElementById('first-splash'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.getElementById('first-splash').classList.toggle('splash-in');
            }
        },
        offset: '80%'
    });
    if (Waypoint.viewportWidth() < 768) {
        document.getElementById('first-splash').classList.add('splash-in');
    }
}

// The second splash
const doSecondSplash = function doSecondSplash() {

    let waypoint = new Waypoint({
        element: document.getElementById('second-splash'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.getElementById('second-splash').classList.toggle('splash-in');
            }     
        },
        offset: '80%'
    });
    if (Waypoint.viewportWidth() < 768) {
        document.getElementById('second-splash').classList.add('splash-in');
    }
}
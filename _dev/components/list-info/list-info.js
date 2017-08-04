
// List info
// ============
// Lists of info points with icon for each definition

// Imports
import { cl } from '../script/library/cl';

// Exports
export { infoSpin };

// Slide Projects in from left
const infoSpin = function infoSpin() {

    let waypoint = new Waypoint({
        element: document.querySelector('.list-info'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.querySelector('.list-info').classList.toggle('active');
            }
        },
        offset: '60%'
    });

    if (Waypoint.viewportWidth() <= 768) {
        document.querySelector('.list-info').classList.add('spin-in');      
    }
}
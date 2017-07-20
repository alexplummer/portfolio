
// List skills
// ============
// Lists with icons to display skill levels

// Imports
import { cl } from '../script/library/cl';

// Exports
export { skillsSpin };

// Slide Projects in from left
const skillsSpin = function skillsSpin() {

    let waypoint = new Waypoint({
        element: document.querySelector('.list-skills'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.querySelector('.list-skills').classList.toggle('spin-in');
            }
        },
        offset: '10%'
    });

    if (Waypoint.viewportWidth() < 768) {
        document.querySelector('.list-skills').classList.add('spin-in');      
    }
}
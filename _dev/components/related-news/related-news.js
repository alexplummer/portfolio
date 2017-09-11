
// Related news
// ============
// (Write description here)

// Imports
import { cl } from '../script/library/cl';

// Exports
export { relatedNewsEntrance };

// Slide Projects in from left
const relatedNewsEntrance = function relatedNewsEntrance() {

    let waypoint = new Waypoint({
        element: document.querySelector('.related-news'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.querySelector('.related-news').classList.toggle('active');
            }            
        },
        offset: '70%'
    });
    if (Waypoint.viewportWidth() <= 768) {
        document.querySelector('.related-news').classList.toggle('active');
    }
}
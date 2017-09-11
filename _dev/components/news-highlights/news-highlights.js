
// News highlights
// ============
// Lists with icons to display skill levels

import { cl } from '../script/library/cl';

// Exports
export { newsEntrance };

// Slide Projects in from left
const newsEntrance = function newsEntrance() {

    let waypoint = new Waypoint({
        element: document.querySelector('.news-highlights'),
        handler: function (direction) {

            if (Waypoint.viewportWidth() > 768) {
                document.querySelector('.news-highlights').classList.toggle('active');
            }            
        },
        offset: '70%'
    });
    if (Waypoint.viewportWidth() <= 768) {
        document.querySelector('.news-highlights').classList.toggle('active');
    }
}

// Intro no description
// ============
// Intro without any description text

// Exports
export { splatTween };

const splatTween = function splatTween () {

    let tween = KUTE.fromTo('#circle',  // target shape
        { path: '#circle' }, // from shape
        { path: '#splat' }, // to shape
        { // options
            easing: 'easingCubicInOut',
            yoyo: true, repeat: 1, duration: 2500,
            morphIndex: 127
        }
    ).start();
}
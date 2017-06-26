
// Variables
// ============
// Define paths used within this gulp file

var paths = {
    tmp: '.tmp',
    dev: '_dev',
    prod: '_prod'
};


// Reqs
// ============
// Load plugins in packages.json automatically

var gulp = require('gulp'),
    fs = require('fs'),
    wiredep = require('wiredep').stream,
    argv = require('yargs').argv,
    gulpsync = require('gulp-sync')(gulp),
    spawn = require('child_process').spawn,
    plugins = require('gulp-load-plugins')({
        pattern: ['*'],
        replaceString: /\bgulp[\-.]/,
        lazy: true,
        camelize: true
    });


// Component directories
// ============
// Builds a list of directories in components

let componentDirs = [];

gulp.task('component-directories', (cb) => {
    componentDirs = fs.readdirSync((paths.dev + '/components/'));
    cb();
});


// Create component
// ============
// Creates a variety of favicons, setup first in 'tasks' folder

gulp.task('create-component', (cb) => {

    let newDirs = fs.readdirSync((paths.dev + '/components/'));

    compareComponents();

    function compareComponents() {

        for (let i = 0; i < Object.keys(newDirs).length; i++) {
            let thisKey = Object.keys(newDirs)[i];

            if (componentDirs[thisKey] !== newDirs[thisKey]) {

                if (newDirs[thisKey] !== 'untitled folder' && newDirs[thisKey] !== 'New folder') {
                    createComponent(newDirs[thisKey]);
                }
                break;
            }
        }
        componentDirs = newDirs;
    }
    function createComponent(componentName) {

        let properName = componentName.replace('-',' ');
        properName = properName.charAt(0).toUpperCase() + properName.slice(1);

        let pugContents = 
`
//- ${properName}
//- ============
//- (Write description here)`;
        
        let sassContents = 
`
// ${properName}
// ============
// (Write description here)`;

        fs.writeFile(paths.dev + '/components/' + componentName + '/_' + componentName + '.pug', pugContents);
        fs.writeFile(paths.dev + '/components/' + componentName + '/_' + componentName + '.scss', sassContents);
        fs.writeFile(paths.dev + '/components/' + componentName + '/' + componentName + '.js', sassContents);
    }

    cb();
});

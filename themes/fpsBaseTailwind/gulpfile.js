const gulp = require("gulp"),
    postcss = require("gulp-postcss"),
    sourcemaps = require('gulp-sourcemaps'),
    browserSync = require("browser-sync").create();

var reload = browserSync.reload;

gulp.task("css", function () {
    return (
        gulp
            .src("source/tailwind.css")
            .pipe(sourcemaps.init())
            .pipe(
                postcss([
                    require("postcss-import"),
                    require('postcss-rem'),
                    require("postcss-mixins"),
                    require("precss"),
                    require("tailwindcss"),
                    require("autoprefixer"),
                    require('postcss-nested'),
                ])
            )
            .on('error', function (errorInfo) {  // if the error event is triggered, do something
                console.log(errorInfo.toString()); // show the error information
                this.emit('end'); // tell the gulp that the task is ended gracefully and resume
            })
            // ...
            .pipe(sourcemaps.write('../maps'))
            .pipe(gulp.dest("css/"))
            .pipe(browserSync.stream())
    );
});

// Watch scss AND html files, doing different things with each.
gulp.task("serve", function () {
    //Variables para que sepa que archivos refrescar
    var files = [
        "./css/main.css",
        "./source/tailwind.css",
        "./source/partials/*.css",
        "./*.php",
        "./js/*.js",
        "tailwind.config.js",
        "./inc/*.php",
        "**/*.js",
        // include specific files and folders
        "screenshot.png"
    ];

    // Serve files from the root of this project
    browserSync.init(files, {
        proxy: "http://tailwindBase.local/"
    });
});

gulp.task("default", ["css", "serve"], function () {
    gulp.watch("source/partials/*.css", ["css"]);
    gulp.watch("tailwind.config.js", ["css"]);
});

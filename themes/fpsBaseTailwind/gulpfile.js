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
                    require("postcss-mixins"),
                    require("postcss-simple-extend"),
                    require("tailwindcss"),
                    require("autoprefixer"),
                    require("precss")
                ])
            )
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

const gulp = require("gulp"),
    plumber = require("gulp-plumber"),
    postcss = require("gulp-postcss"),
    browserSync = require("browser-sync").create();

var reload = browserSync.reload;

gulp.task("css", function() {
    return (
        gulp
            .src("source/tailwind.css")

            .pipe(
                postcss([
                    // ...
                    require("tailwindcss"),
                    require("autoprefixer"),
                    require("precss")
                    // ...
                ])
            )
            .pipe(plumber())
            // ...
            .pipe(gulp.dest("css/"))
            .pipe(browserSync.stream())
    );
});

// Watch scss AND html files, doing different things with each.
gulp.task("serve", function() {
    //Variables para que sepa que archivos refrescar
    var files = [
        "./css/main.css",
        "./*.php",
        "./js/*.js",
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

gulp.task("default", ["css", "serve"], function() {
    gulp.watch("source/*.css", ["css"]);
});

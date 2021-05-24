const { src, dest, watch, series } = require("gulp");
const sourcemaps = require("gulp-sourcemaps");
const postcss = require("gulp-postcss");
var browserSync = require("browser-sync").create();
//post css
function cssTask(cb) {
    return src("./source/tailwind.css")
        .pipe(sourcemaps.init())
        .pipe(postcss())
        .pipe(sourcemaps.write("../maps"))
        .pipe(dest("./css/"))
        .pipe(browserSync.stream());
    cb();
}
//serve
function browsersyncServe(cb) {
    browserSync.init({
        proxy: "https://test.local/",
    });
    cb();
}
function browsersyncReload(cb) {
    browserSync.reload();
    cb();
}
//watch
function watchTask() {
    watch(["./**/*.php", "./**/*.js"], browsersyncReload),
        // watch(["./**/*.js"], browsersyncReload),
        watch(["./source/**/*.css"], series(cssTask, browsersyncReload));
}
//default
exports.default = series(cssTask, browsersyncServe, watchTask);
exports.css = cssTask;
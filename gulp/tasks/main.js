import webpack from "webpack-stream";

export const main = () => {
 return app.gulp.src(app.path.src.main, { sourcemap: app.isDev })
.pipe(webpack({
    mode:app.isBuild ? "production" : "development",
    output: {
        filename: "main.min.js",
    }
}))
    .pipe(app.gulp.dest(app.path.build.main))
    .pipe(app.plugins.browsersync.stream());
}
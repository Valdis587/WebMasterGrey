import gulp from "gulp";

import { path } from "./gulp/config/path.js";
import { plugins } from "./gulp/config/plugins.js";

global.app = {
   isBuild: process.argv.includes('--build'),
   isDev: !process.argv.includes('--build'),
   path: path,
   gulp: gulp,
   plugins: plugins
}

import { copy } from "./gulp/tasks/copy.js";
import { reset } from "./gulp/tasks/reset.js";
import { html } from "./gulp/tasks/html.js";
import { js } from "./gulp/tasks/js.js";
import { server } from "./gulp/tasks/server.js";
import { scss } from "./gulp/tasks/scss.js";
import { images } from "./gulp/tasks/images.js";
import { otfToTtf, ttfToWoff, fontsStyle } from "./gulp/tasks/fonts.js";
import { svgSprive } from "./gulp/tasks/svgSprive.js";
import { lib } from "./gulp/tasks/lib.js";
import { main } from "./gulp/tasks/main.js";
import { ftp } from "./gulp/tasks/ftp.js";

function watcher() {
   gulp.watch(path.watch.files, copy);
   gulp.watch(path.watch.html, html);
   gulp.watch(path.watch.scss, scss);
   gulp.watch(path.watch.js, js);
   gulp.watch(path.watch.images, images);
   gulp.watch(path.watch.lib, lib);
   gulp.watch(path.watch.main, main);
}

export { svgSprive }

const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle);

const mainTasks = gulp.series(fonts, gulp.parallel(copy, html, lib, main, js, scss, images));

const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher, server));

const build = gulp.series(reset, mainTasks);

const ftpsmain = gulp.series(reset, mainTasks, ftp);

export { dev }
export { build }
export { ftpsmain }

gulp.task('default', dev);
import { configFtp } from '../config/ftp.js';
import vinylFtp from 'vinyl-ftp';
import  util  from 'gulp-util';

export const ftp = ()=> {
    configFtp.log = util.log;
    const ftpConnect = vinylFtp.create(configFtp);
    return app.gulp.src(`${app.path.buldFolder}/**/*.*`, {})
    .pipe(ftpConnect.dest(`/websites-master.ru/public_html/wp-content/themes/websitesmaster/assets/`));
}
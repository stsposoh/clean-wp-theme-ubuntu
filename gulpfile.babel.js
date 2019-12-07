'use strict';

import { host, user, password, FTPAddress } from './ftp-config';

import { src, dest, lastRun, watch, series, parallel } from 'gulp';
import stylus from 'gulp-stylus';
import nib from 'nib';
import debug from 'gulp-debug';
import plumber from 'gulp-plumber';
import sourcemaps from 'gulp-sourcemaps';
import newer from 'gulp-newer';
import notify from 'gulp-notify';
import concat from 'gulp-concat';
import gulpIf from 'gulp-if';
import uglify from 'gulp-uglify';
import babel from 'gulp-babel'
import yargs from 'yargs';
import imagemin from 'gulp-imagemin';
import cleanCss from 'gulp-clean-css';
import gutil from 'gulp-util';
import gcmq from 'gulp-group-css-media-queries';
import ftp from 'vinyl-ftp';

const PRODUCTION = yargs.argv.prod;
const THEMENAME = 'wp-theme';

export const stylesLibs = () => {
  return src('app/styl/libs.styl')
    .pipe(plumber({
      errorHandler: notify.onError(err => ({
        title: 'Styles libs',
        message: err.message
      }))
    }))
    .pipe(stylus({
      use: [nib()],
      'include css': true
    }))
    .pipe(cleanCss({compatibility:'ie8'}))
    .pipe(dest(`dist/${THEMENAME}/css`))
};

export const styles = () => {
  return src([
    'app/styl/components/fonts.styl',
    'app/styl/components/default.styl',
    'app/styl/components/main.styl'
  ])
    .pipe(plumber({
      errorHandler: notify.onError(err => ({
        title: 'Styles',
        message: err.message
      }))
    }))
    .pipe(gulpIf(!PRODUCTION, sourcemaps.init()))
    .pipe(debug({title: 'src'}))
    .pipe(stylus({
      use: [nib()],
      'include css': true
    }))
    .pipe(debug({title: 'stylus'}))
    //.pipe(gulpIf(PRODUCTION, cleanCss({compatibility:'ie8'})))
    .pipe(concat('main.css'))
    .pipe(gulpIf(PRODUCTION, gcmq()))
    .pipe(gulpIf(!PRODUCTION, sourcemaps.write()))
    .pipe(dest(`dist/${THEMENAME}/css`))
};

export const js = () => {
  return src([
    'app/js/main.js'
  ])
    .pipe(plumber({
      errorHandler: notify.onError(err => ({
        title: 'JS',
        message: err.message
      }))
    }))
    .pipe(babel({
      presets: [
        ['@babel/env', {
          modules: false
        }]
      ]
    }))
    .pipe(concat('bundle.js'))
    //.pipe(gulpIf(PRODUCTION, uglify()))
    .pipe(dest(`dist/${THEMENAME}/js`))
};

export const libs = () => {
  return src([
    //all js libs include here
    //empty.js it heeds if you dont use any libs
    'app/libs/empty.js',
    // 'node_modules/aos/dist/aos.js',
    // 'node_modules/selectize/dist/js/standalone/selectize.min.js',
    // 'node_modules/animejs/lib/anime.min.js',
    // 'app/libs/slick-carousel/slick.js',
    // 'node_modules/jquery-validation/dist/jquery.validate.min.js',
    // 'node_modules/sticky-js/dist/sticky.min.js',
    // 'node_modules/ilyabirman-likely/release/likely.js'
  ])
    .pipe(plumber({
      errorHandler: notify.onError(err => ({
        title: 'Libs',
        message: err.message
      }))
    }))
    .pipe(concat('libs.min.js'))
    .pipe(uglify())
    .pipe(dest(`dist/${THEMENAME}/js`));
};

export const images = () => {
  return src('app/img/**/*.{jpg,jpeg,png,svg,gif}')
    .pipe(gulpIf(PRODUCTION, imagemin()))
    .pipe(dest(`dist/${THEMENAME}/img`));
};

export const watchForChanges = () => {
  watch('app/styl/**/*', styles);
  watch('app/js/**/*.js', js);
  watch('app/img/**/*.{jpg,jpeg,png,svg,gif}', images);
  watch(`dist/${THEMENAME}/**/*.*`, deploy);
};

export const deploy = () => {
  const conn = ftp.create({
    host,
    user,
    password,
    parallel:  10,
    log: gutil.log
  });
  const globs = 'dist/**';
  return src(globs, {since: lastRun(deploy)})
  .pipe(newer(FTPAddress))
  .pipe(conn.dest(FTPAddress));
};

export const dev = series(parallel(stylesLibs, styles, libs, images, js), deploy, watchForChanges);
export const build = series(parallel(stylesLibs, styles, libs, images, js), deploy);
export default dev;

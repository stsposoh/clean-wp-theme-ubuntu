- Rename "dist/wp-theme" to your theme name and change theme name in "const THEMENAME = 'wp-theme'" if gulpfile.babel.js

- Set theme info in dist/wp-theme/style.css

- Create at the root directory file "ftp-config.js" with FTP data:
  > *`module.exports = {`*
  > *`  host: '',`*
  > *`  user: '',`*
  > *`  password: '',`*
  > *`  FTPAddress: ''`*
  > *`};`*

> install
  > *`$ npm i`*
>
for development:
  > *`$ npm run start`*
>
for production:
  > *`$ npm run build`*

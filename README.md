# Madisonville Christmas - https://www.madisonvillechristmas.com/
===

## References

### General

**Github:** <a href="https://github.com/digitalthrive/madisonville-wp" target="_blank">https://github.com/digitalthrive/madisonville-wp</a><br />
**Deploybot:** This project uses `AWX` for deployment to production and development environments.<br />

### Production

**Website:** <a href="https://www.madisonvillechristmas.com/" target="_blank">https://www.madisonvillechristmas.com/</a><br />
**Database:** TBD<br />

### Development

**Website:** <a href="https://madxmas.wdgital.com/" target="_blank">https://madxmas.wdgital.com/</a><br />
**Database:** `madxmas` located on `madxmas.wdgital.com`<br />

## Project Setup

This project requires Node version `11.10.0` in order to install the appropriate dependencies.

Use `NVM` to install or switch to version node version 11.10.0

### Initial

- Clone the project via `git clone https://github.com/digitalthrive/madisonville-wp`
- Download WordPress via https://wordpress.org/download/
- Extract the contents of the WordPress download into your `madxmas` folder. There is a `.gitignore` file there that will ignore almost everything except what is in the `wp-content/themes/madxmas` directory
- If on an Apple Silicon chip you may need to switch your archetecture via `arch -x86_64 zsh` to install dependencies using i386 instead of arm
- Navigate to `wp-content/themes/madxmas` and run `npm install`
- You may have to install `gulp` manually by running `npm install -g gulp`
- Ensure that you have a copy of the database pulled from dev or prod and installed locally using the credentials found in `wp-config.php`
- Create `wp-config.php` (not tracked in Git) and edit to match the database credentials from dev. You can SSH into the dev server (/var/www/vhosts/madxmas.wdgital.com/wp-config.php) and copy the contents of the file into your local copy. 

### Ongoing

- Run `gulp` from the `wp-content/themes/madxmas` directory to consolidate SCSS into `dist/css/bundle.css`.
- All CSS files need to be converted or renamed to .scss, and stored in the `src/scss` directory. The CSS Gulp task will not work with basic .css files.
- For development purposes, `gulp-sourcemaps` was added so that you can actually see what .SCSS file is referencing a class, instead of saying `bundle.css`. Running `gulp` with no flags will cause this to occur, and unminify bundle.css. Running the production commands below will minify everything and turn off the source map feature.

### Production

- Run `gulp styles --prod` to consolidate and minify all of the SCSS files into `dist/css/bundle.css` for production.
- Run `gulp scripts --prod` to minify all of the js files into `dist/js/bundle.js` for production.

## Technologies

### Languages / Libraries

- PHP
- jQuery
- Sass

### WordPress

**Plugins**

The plugins listed below have significant influence on the website.

- Advanced Custom Fields Pro

## Features

TBD

## Tasks & Processes

TBD

## Miscellaneous

TBD

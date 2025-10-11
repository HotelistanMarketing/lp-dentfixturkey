# Tools & Configuration

Create file watchers to serve optimized production codes...
We currently deploy both dev & production files because of
service limitations.

- **Less**
    ```shell
    npm install less -g
    npm install less-plugin-clean-css -g
    ```
- **Gulp**
    ```shell
    npm install gulp-cli -g
    npm install gulp
    npm install gulp-concat
    npm install gulp-uglify
    ```

## CSS Minification

Configure Less file watcher for minified compilation:

`--clean-css="--s1 --advanced"`

## JS Minification and Obfuscation

Create a JS file watcher for related `gulp` task (`uglify-merge`).

Here is an example file watcher setup for PhpStorm:
> **File type:** JavaScript<br>
> **Program:** gulp<br>
> **Arguments:** uglify-merge<br>
> No output paths to refresh<br>
> **Working directory:** $Projectpath$<br>

# Useful Links

- https://kinsta.com/docs/application-hosting
- https://kinsta.com/docs/processes
- https://devcenter.heroku.com/articles/php-support
- https://devcenter.heroku.com/articles/custom-php-settings
- https://devcenter.heroku.com/articles/deploying-php
- https://devcenter.heroku.com/articles/procfile
- https://devcenter.heroku.com/categories/app-performance

# Todo
- Document WebP optimization.


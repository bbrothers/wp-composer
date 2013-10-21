# WordPress Composer Setup
Run `composer install` to download and install WordPress to a `wp` directory. Themes and plugins are installed to the `content` directory.

>Note: This is still under development and may have a few bugs.

## Plugins
Plugins should be installed using composer from [WordPress Packagist](http://wpackagist.org/). Custom plugins need to be exempted from from the `.gitignore` file using the `!content/plugins/my-plugin` syntax.

## Environment
Environment variables should be set and a new config folder created to match. For example, when setting `ENV` to `dev`, a `config/dev/wp-config.php` file should be created. For `ENV` as `testing` a `config/testing/wp-config.php` file would need to be created.

Though perhaps not the safest option, if no `ENV` is set, the default will be `production`.

## Composer.json
Update WordPress by updating the version listed in composer and running a `composer update`. Third party libraries such as `Twig` should also be installed here.

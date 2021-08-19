<?php

/*
 * WARNING!
 *
 * Do not use this index.php as an entry point on production.
 *
 * Instead, set your website document root to /dist directory.
 *
 */

define('APP_ENV', 'development');
define('APP_PUBLIC_PATH', 'dist/');
define('APP_MANAGER_PATH', '/dir/site/files');

require __DIR__.'/dist/index.php';

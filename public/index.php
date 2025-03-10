<?php
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'functions.php';

spl_autoload_register(function ($class) {
 
    require base_path("Core/{$class}.php");
});
// require BASE_PATH.'Database.php';
// require BASE_PATH.'Response.php';
require BASE_PATH.'router.php';
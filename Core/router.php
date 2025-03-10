<?php

function routeToController($requestUrl,$routes)
{
   if(array_key_exists($requestUrl,$routes))
   {
       require  base_path($routes[$requestUrl]);
   }else
   {
      abort(404);
   }
}
function abort($code=404)
{
   http_response_code($code);
   require  base_path("views/{$code}.php");
   die();
}

$routes = require base_path('routes.php');
$requestUrl=parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($requestUrl);
routeToController($requestUrl,$routes);
<?php

function routeToController($requestUrl,$routes)
{
   if(array_key_exists($requestUrl,$routes))
   {
       //dd( $routes[$requestUrl]);
       require $routes[$requestUrl];
   }else
   {
      abort(404);
   }
}
function abort($code=404)
{
   http_response_code($code);
   require("views/{$code}.php");
   die();
}
$routes = require('routes.php');
$requestUrl=parse_url($_SERVER["REQUEST_URI"])["path"];
// dd($requestUrl);
routeToController($requestUrl,$routes);
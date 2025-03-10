<?php
function dd($value)
{
    echo "<pre>";
  var_dump($value);
echo "</pre>";
die();
}

function urlIs($url)
{

   return $_SERVER["REQUEST_URI"]===url($url);

}
function authorize($condition, $status = Response::FORBIDDEN) {
  if (! $condition) {
      abort($status);
  }
}
function url($subUrl='')
{
  $config = require 'config.php';
  return $config['mainPathUrl'].$subUrl;

}
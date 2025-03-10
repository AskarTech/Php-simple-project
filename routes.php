<?php
// $mainPathUrl='/website/php-Demo';
//dd(($_SERVER["REQUEST_URI"]));

//urlIs('/contact.php');
// dd(url('contacts'));
return[
   url('/')=>'Controller\index.php',
   url('/about')=>'Controller\about.php',
   url('/notes')=>'Controller\notes\index.php',
   url('/note')=>'Controller\notes\show.php',
  url('/notes/create')=>'Controller\notes\create.php',
   url('/contact')=>'Controller\contact.php'
];
;
<?php
// $mainPathUrl='/website/php-Demo';
//dd(($_SERVER["REQUEST_URI"]));

//urlIs('/contact.php');
// dd(url('contacts'));
return[
   url('/')=>'Controller\index.php',
   url('/about')=>'Controller\about.php',
   url('/notes')=>'Controller\notes.php',
   url('/note')=>'Controller\note.php',
  url('/notes/create')=>'Controller\note-create.php',
   url('/contact')=>'Controller\contact.php'
];
;
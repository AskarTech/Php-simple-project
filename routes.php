<?php
$mainUrl='/website/demo';
//dd(($_SERVER["REQUEST_URI"]));

//urlIs('/contact.php');
return[
   "$mainUrl/"=>'Controller\index.php',
   "$mainUrl/about"=>'Controller\about.php',
   "$mainUrl/notes"=>'Controller\notes.php',
   "$mainUrl/note"=>'Controller\note.php',
   "$mainUrl/notes/create"=>'Controller\note-create.php',
    "$mainUrl/contact"=>'Controller\contact.php'
];
;
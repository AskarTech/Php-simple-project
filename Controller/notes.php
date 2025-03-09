<?php
$config = require('config.php');
$db = new Database($config['database']);
$heading = 'My Notes';

$currentUserId = 1;

$notes = $db->query('select * from notes where user_id = 1')->get();





require "view/notes.view.php";
<?php

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    dd($_POST);
}

require 'view/note-create.view.php';
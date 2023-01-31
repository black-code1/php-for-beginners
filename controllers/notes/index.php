<?php

use Core\App;
use Core\Database;
//curl -X POST http://localhost:8888/notes/create -d 'body=' test on terminal

$db = App::resolve(Database::class);
$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
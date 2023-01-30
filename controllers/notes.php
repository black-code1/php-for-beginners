<?php
//curl -X POST http://localhost:8888/notes/create -d 'body=' test on terminal
$config = require('config.php');
$db = new Database($config['database']);

$heading = 'My Notes';

$notes = $db->query('select * from notes where user_id = 1')->get();

require "views/notes.view.php";
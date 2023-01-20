<?php

require 'functions.php';
//require 'router.php';

// connect to our MySQL database.
// dsn = Data Source Name
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=root;charset=utf8mb4";

$pdo = new PDO($dsn);

// prepare query statement to send to mysql
$statement = $pdo->prepare("select * from posts");

// said to mysql to execute || mysql execute that query
$statement->execute();

// we fetch all of the results
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
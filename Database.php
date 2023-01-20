<?php
// Connect to the database, and execute a query.
class Database
{
    public $connection;

    public function __construct()
    {
        // connect to our MySQL database.
        // dsn = Data Source Name
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;password=root;charset=utf8mb4";
        $this->connection = new PDO($dsn);
    }
    public function query($query)
    {
        // prepare query statement to send to mysql
        $statement = $this->connection->prepare($query);
        // said to mysql to execute || mysql execute that query
        $statement->execute();

        // we fetch all of the results
        return $statement;
    }
}

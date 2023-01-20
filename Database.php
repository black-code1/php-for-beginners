<?php
// Connect to the database, and execute a query.
class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = 'root')
    {
        // connect to our MySQL database.
        // dsn = Data Source Name
        $dsn = 'mysql:' .http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
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
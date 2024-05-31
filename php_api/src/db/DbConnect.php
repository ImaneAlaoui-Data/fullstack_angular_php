<?php
class DbConnect {
    private string $user = 'poe_db_admin';
    private string $password = 'poe_secret_password';
    private string $host = 'db';
    private string $port = '3306';
    private string $dbName = 'poe_repository';

    private $connection;

    public function getConnection(): ?\PDO {
        return $this->connection;
    }
    
    public function connect(): void {
        // Data Service Name
        $dsn = 'mysql:dbname=' . $this->dbName . ';' .
            'host=' . $this->host . ';' .
            'port=' . $this->port;
        try {
            $this->connection = new \PDO(
                $dsn,
                $this->user,
                $this->password
            );
        } catch (\PDOException $e) {
            echo 'Unable to connect with error : ' . $e->getMessage();
            die();
        }

    }
}
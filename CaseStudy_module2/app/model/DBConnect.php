<?php

namespace App\model;

class  DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=casestudy';
        $this->username = 'root';
        $this->password = 'Vanh2k02@';

    }

    public function connect(): \PDO
    {
        try {
            return new  \PDO($this->dsn, $this->username, $this->password);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
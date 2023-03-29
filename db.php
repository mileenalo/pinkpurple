<?php

date_default_timezone_set('America/Sao_Paulo');
ini_set('max_input_vars', 10000);

class Database extends PDO
{

    public $host = "pink-purple.cmvborrse5et.us-east-2.rds.amazonaws.com";
    public $port = 3306;
    public $schema = "db_pinkpurple";
    public $username = "admin";
    public $password = "pinkpurple";

    public function __construct($type = 'mysql')
    {
        set_time_limit(3600);

        $this->host = "pink-purple.cmvborrse5et.us-east-2.rds.amazonaws.com";
        $this->port = 3306;
        $this->schema = "db_pinkpurple";
        $this->username = "admin";
        $this->password = "pinkpurple";

        if ($type == 'mysql') {
            $dsn = sprintf('mysql:host=%s;port=%d;dbname=%s', $this->host, $this->port, $this->schema);
        }

        parent::__construct($dsn, $this->username, $this->password);
    }

    public function _exec($query = '')
    {
        $stmt = $this->prepare($query);
        $stmt->execute();
        $stmt->closeCursor();
        
        return true;
    }

    public function select($query = '')
    {
        $stmt = $this->prepare($query);
        $stmt->execute();
        $ret = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $ret;
    }

    public function _find($query = '')
    {
        $stmt = $this->prepare($query);
        $stmt->execute();
        $ret = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();

        return $ret;
    }
}

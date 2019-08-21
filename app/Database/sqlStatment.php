<?php

//namespace Database\sqlStatment;
//use Database\connection as connection;

include 'connection.php';

class sqlStatment 
{
    protected $table;
    private $stmt;
    private $dbh;
    
    public function __construct()
    {
        $this->dbh = new connection();
    }

    public function All($table)
    {
      $this->dbh->query("SELECT * FROM $table ");
      
     $rows = $this->dbh->getAll();
     return $rows;
      

         
    }
    public function insert($values)
    {
        $query = $this->dbh->query("INSERT INTO $this->table VALUES $values");
        $query->rowCount();

         
    }





}

new sqlStatment();
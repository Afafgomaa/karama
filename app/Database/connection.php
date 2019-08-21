<?php


//namespace Database\connection;

include_once('../Config/Config.php');
class connection 
{
  // this data blow form Config/Congig.php file 

private $db_name = DB_NAME;
private $db_host = DB_HOST;
private $db_user = DB_USER;
private $db_pass = DB_PASS;

protected $dbh;
private $stmt;
private $error;

public function __construct()
{
  // initialies connection paramter  & options 
    $dsn = 'mysql:host=' . $this->db_host .';dbname=' .$this->db_name ;
    $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
     // try to connect to database 
      try{
        $this->dbh = new PDO($dsn,$this->db_user, $this->db_pass, $options);
        echo 'connetced';
      }
      // catch if  there is  error   & printed
      catch(PDOException $e){
          $this->error = $e-getMessage();
          echo $this->error ;
      }


}
 
  // Prepare statement with query

public function query($statment) 
{
   $this->stmt =  $this->dbh->prepare($statment);
}
  // Execute the prepared statement

public function execute(array $bindValues = null)
{
  if($bindValues !== null) {
        return  $this->stmt->execute($bindValues);
  }
  return $this->stmt->execute();
 
}
  // Get row count

public function rowCount()
{
    return $this->stmt->rowCount();
}
  // Get single record as object

public function Single()
{
   $this->stmt->execute();

   return $this->stmt->fetch(PDO::FETCH_OBJ);

}
public function getAll()
{
  $this->stmt->execute();

  return $this->stmt->fetchAll(PDO::FETCH_OBJ);

}

        


}



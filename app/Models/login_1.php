<?php

//namespace app\Models;
include '../app/Models/commenMthodesModel.php';
include '../app/Database/sqlStatment.php';

class login_1 
{
    use commenMthodesModel;
    private $db ;
   

    public function __construct()
    {
        $this->db = new sqlStatment() ;
        $this->table = 'customers';
       
    }
public function retrive()
{
   $rows =  $this->db->all($this->table);
   return $rows;

} 


  
}
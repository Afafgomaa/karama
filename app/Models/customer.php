<?php
namespace app\Models;

include '../Database/sqlStatment.php';

class customer extends sqlStatment 
{

    private $db ;
    private $template = 'template';

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


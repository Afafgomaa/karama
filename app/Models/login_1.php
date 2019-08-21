<?php

//namespace app\Models;

include '../Database/sqlStatment.php';

class login_1 extends sqlStatment 
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

public function render($view, $varible)
{
    
    ob_start();
    include "../Views/". $view . ".php";
    $page = ob_get_contents();
    include "../Views/". $this->template . ".php";
   
}
  
}
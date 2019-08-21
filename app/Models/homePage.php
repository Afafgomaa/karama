<?php

//namespace app\Models;
//use app\Models\commenMthodesModel;


include '../app/Database/sqlStatment.php';

include '../app/Models/commenMthodesModel.php';
class homePage 
{
    use commenMthodesModel;

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
public function retriveMenu()
{
   $menus =  $this->db->all('menu');
   
   return $menus;

} 
public function retriveMenuChild()
{
   $menusChilds =  $this->db->all('menu_children');
   
   return $menusChilds;

} 

 protected function retriveMenuChildren()
 {
    
   //  $query = ("SELECT * FROM menu_children WHERE menu_id  = ? ");
      
    // $this->get($query, '2');
 }


  
}
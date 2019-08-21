<?php
include "../Models/customer.php";

class Customer_1
{
   private $model;

    public function __construct()
    {
        $this->model = new customer();
    }
    public function getUsers()
    {
      $rows =  $this->model->retrive();
      //var_dump($rows);

     return $this->model->render('customer', $rows);

   
    }
}

$ff = new Customer_1();
$ff->getUsers();


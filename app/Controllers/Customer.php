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

      $this->model->render('customer', $rows);

   
    }
}


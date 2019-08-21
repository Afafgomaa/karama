<?php

//namespace app\Controllers;

//use app\Models\login_1;
include "../Models/login_1.php";

class login {

    private $model;

    public function __construct()
    {
        $this->model = new login_1();
    }
    public function getUsers()
    {
      $rows =  $this->model->retrive();

      $this->model->render('login', $rows);

   
    }
}


$jj = new login();
$jj->getUsers();
<?php

//namespace app\Controllers;

//use app\Models\login_1;

include "../app/Models/login_1.php";

class login {

    private $model;

    public function __construct()
    {
        $this->model = new login_1();
    }
    public function index()
    {
      $rows =  $this->model->retrive();

      $this->model->render('login', $rows);

   
    }
}



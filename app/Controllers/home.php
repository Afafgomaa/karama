<?php

//namespace app\Controllers;

//use app\Models\homePage as homePage;

include "../app/Models/homePage.php";

class home {

    private $model;

    public function __construct()
    {
        $this->model = new homePage();
    }
    public function index()
    {
      $rows =  $this->model->retrive();
      $settings = [
        "menu" => $this->model->retriveMenu(),
        'menuChild' => $this->model->retriveMenuChild()
      ];

     



      
      $this->model->render('home', $rows, $settings);

   
    }
}


<?php
 
 include_once('Config/Config.php');

  // Autoload Core Libraries
  spl_autoload_register(function($className)
   {
     require_once 'Database/' . $className . '.php';
     
   });
  

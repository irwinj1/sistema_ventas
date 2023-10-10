<?php
  require './Config/config.php'; 
  require './Controllers/ViewController.php'; 

  $plantilla = new ViewController(); 
  
  $plantilla->getViewController();

  // $controller = '';
  // $method = 'index';
  // $params = '';
  // $urlData = $_GET['url'] ?? 'Home/index';
  // $arrayUrl = explode('/',$urlData);
  // if (isset($arrayUrl[0])) {
  //   # code...
  //   $controller = $arrayUrl[0];
  // }
  // if (isset($arrayUrl[1])) {
  //   # code...
  //   if ($arrayUrl[1] != '') {
  //     # code...
  //     $method = $arrayUrl[1];
  //   }
  // }
  // if (isset($arrayUrl[2])) {
  //   # code...
  //   if ($arrayUrl[2] != '') {
  //     # code...
  //     for ($i=2; $i < count($arrayUrl); $i++) { 
  //       # code...
  //       $params .= $arrayUrl[$i].',';
  //     }
  //     $params=trim($params,',');
  //   }
  // }
  // spl_autoload_register(function($class){
  //   if (file_exists(LBS.$class.'.php')) {
  //     # code...
  //     require LBS.$class.'.php';
  //   }
  // });
  // $controller = $controller.'Controller';
  // if (file_exists('Controllers/'.$controller.'.php')) {
  //   # code...
    
  //   require 'Controllers/'.$controller.'.php';
  //   $controller = new $controller();
  //   if (method_exists($controller,$method)) {
  //     # code...
  //     $controller->$method($params);
  //   }
  // }
 
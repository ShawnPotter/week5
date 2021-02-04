<?php
  //The Controller

  //turn on error reporting
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  //require nessecary files
  require_once("vendor/autoload.php");
  require_once("model/data-layer.php");

  //create an instance of the base class
  $f3 = Base::instance();
  $f3->set('DEBUG', 3);

  $f3->route('GET /', function($f3){
    //save variables
    $f3->set('username','jsmo');
    $f3->set('password',sha1("Password01"));
    $f3->set('title','Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('color', 'purple');
    $f3->set('radius', 10);
    $f3->set('fruits',getFruit());

    $view = new Template();
    echo $view->render('views/info.html');
  });
  //Define a default route (home page)
  /*$f3->route('GET /', function(){
    $view = new Template();
    echo $view->render('views/info.html');
  });*/


  //run fat free
  $f3->run();

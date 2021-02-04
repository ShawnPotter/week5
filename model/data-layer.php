<?php
// sdev328/week5/model/data-layer.php
//define functions to "get data form somewhere
function getFruit(){
  $fruits = array('apple','banana','orange','kiwi');
  return $fruits;
}

/*Returns an associate array of names */
function getSalary(){
  $salaries = array("Jessica"=>"200000","Heather"=>"250000","Bezeyl"=>"300000");
  return $salaries;
}


function getDesserts(){
  return array("chocolate"=>"Chocolate Mousse","vanilla"=>"Vanilla Custard","strawberry"=>"Strawberry Shortcake");
}

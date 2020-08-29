<?php
//Add sales car/ only add
require_once 'Model/Products_Model.php';
$addProd = new Products_Model();
//var_dump(apc_fetch('car'));



/*if(isset($_GET['id_product'])){
  apc_store("cars", 10);   
  $rows = $addProd->readProduct($_GET['id_product'])[0];
  
  array_push(apc_fetch('car'), "L!");
  
  include 'Controller/controller_view_products.php';
}else{
 // $rows = $addProd->readProduct()[0];
  include 'Views/view_car.php';
}

$v = apc_fetch('cars');
*/
var_dump($v);
<?php
include "Model/Products_Model.php";
$productView = new Products_Model();
if(isset($_GET['id_product'])){
  $rows = $productView->readProduct($_GET['id_product'])[0];
  include "Views/view_product_general_client.php";
}else{
  $rows = $productView->readProduct()[0];
  include "Views/view_products_client.php";
}
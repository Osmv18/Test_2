<?php
include "Model/Products_Model.php";
$productView = new Products_Model();
if(isset($_GET['id'])){
  $rows = $productView->readProducto($_GET['id'])[0];
  include "view/generalProductoView.php";
}else{
  $rows = $productView->readProducto()[0];
  include "view/productosView.php";
}


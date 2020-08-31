<?php 
require_once 'Model/admin_products.php';
$products = new products();
$rows = $products->read();
include 'Views/view_products_admin.php';
?>

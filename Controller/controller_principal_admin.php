<?php

require_once 'Model/admin_products.php'; // 1
$products = new products();
$rows = $products->read();
include 'Views/view_principal_admin.php';
?>


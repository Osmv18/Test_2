<?php
include 'model/admin_products.php';
$product = new products();
$rows_product = $product->read();


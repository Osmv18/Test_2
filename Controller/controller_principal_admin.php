<?php
require_once 'model/admin_products.php';
$products = new products();
$rows = $products->read();

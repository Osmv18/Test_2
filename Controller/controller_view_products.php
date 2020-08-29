<?php
//View products - client
require_once 'Model/Products_Model.php';
$products = new Products_Model();
$rows = $products->readProduct();
include 'Views/view_products_client.php';


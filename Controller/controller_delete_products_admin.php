<?php
include "model/admin_products.php";
$delete_product = new products();
$delete_product->delete($_GET['$id_product']);
$rows = $delete_product->delete();
include 'view/Products.php';


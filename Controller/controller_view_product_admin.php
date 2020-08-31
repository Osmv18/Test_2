<?php
include "model/admin_products.php";
$products = new products();
if(isset($_GET['id_product'])){
    $row = $products->read($_GET['id_product'])[0];
    include "Views/view_admin.php";
}else{
    $rows = $products->read();
    include "Views/view_products_admin.php";
}


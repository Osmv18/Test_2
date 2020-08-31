<?php
require_once 'model/admin_products.php';
if ($_POST) {
    $update_product = new products($_POST['name_product'], $_POST['id_categorie'], $_POST['price'], $_POST['quantity'], $_POST['description'], $_POST['id_product']);
    $update_product->update();
    $rows = $update_product->read();
    include "Views/view_products_admin.php";
} else {
    $update_product = new products();
    $row = $update_product->read($_GET['id_product'])[0];
    include "Views/view_update_product_admin.php";
}


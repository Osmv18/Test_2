<?php
require_once 'model/admin_products.php';
if ($_POST) {
    $update_product = new products($_POST['name_product'], $_POST['id_categorie'], $_POST['price'], $_POST['quiantity'], $_POST['description'], $_POST['id_product']);
    $update_product->update();
    $rows = $update_products->read();
    include "view/Productos.php";
} else {
    $update_product = new products();
    $row = $update_products->read($_GET['id_product'])[0];
    include "view/actualizar_producto.php";
}


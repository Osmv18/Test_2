<?php
if (isset($_GET['id_categoria'])) {
    include 'model/admin_products.php';
    $prod = new products();
    $rows = $prod->prod_categories($_GET['$id_categorie']);
    include "view/mostrarProd.php";
    if(empty($rows)){
        include "view/noHay.php";
    }
} else {
    require_once
    'model/admin_categories.php';
    $categ = new categories();
    $rows = $categ->read_categ();
    include "view/Categorias.php";
}

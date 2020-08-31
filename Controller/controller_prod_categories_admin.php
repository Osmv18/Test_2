<?php
if (isset($_GET['id_categorie'])) {
    require_once 'model/admin_products.php';
    $prod = new products();
    $rows = $prod->prod_categories($_GET['id_categorie']);
    if(empty($rows)){
        include "Views/view_there_isnt_admin.php";
    }
    include "Views/view_show_product_admin.php";
} else {
    require_once 'model/admin_categories.php';
    $categ = new categories();
    $rows = $categ->read_categ();
    include "Views/view_categories_admin.php";
}

<?php
include 'model/admin_products.php';
if ($_POST) {
    $form = new products($_POST['name_product'], $_POST['id_categorie'], $_POST['price'], $_POST['quiantity'], $_POST['description']);
    $form->create();
    include "view/correcto.php";
} else {
    include "view/error.php";
}


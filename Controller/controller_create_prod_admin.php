<?php
include 'model/admin_products.php';
if ($_POST) {
    $form = new products($_POST['name_product'], $_POST['id_categorie'], $_POST['price'], $_POST['quantity'], $_POST['description']);
    $form->create();
    include "Views/view_correct_admin.php";
} else {
    include "Views/view_error_admin.php";
}


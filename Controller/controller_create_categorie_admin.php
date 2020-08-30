<?php
include 'model/categories.php';
if ($_POST) {
    $form2 = new categories($_POST['name_categorie']);
    $form2->create_categ();
    include "view/correcto.php";
} else {
    include "view/error.php";
}



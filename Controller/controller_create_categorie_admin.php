<?php
include 'model/admin_categories.php';
if ($_POST) {
    $form2 = new categories($_POST['name_categorie']);
    $form2->create_categ();
    include "Views/view_correct_admin.php";
} else {
    include "Views/view_error_admin.php";
}



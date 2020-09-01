<?php
include 'model/admin_categories.php';
if ($_POST) {
    $update_Categorie = new categories($_POST['name_categorie'], $_POST['id_categorie']);
    $update_Categorie->update_categ();
    $row = $update_Categorie->read_categ();
    include "Views/view_categories_admin.php";
} else {
    $update_Categorie = new categories();
    $row = $update_Categorie->read_categ($_GET['id_categorie'])[0];
    include "Views/view_update_categorie_admin.php";
}

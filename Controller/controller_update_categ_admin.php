<?php
include 'model/admin_categories.php';
if ($_POST) {
    $update_Categorie = new categories($_POST['name_categorie'], $_POST['id_categorie']);
    $update_Categorie->update_categ();
    $rows = $update_Categorie->read_categ();
    include "view/Categorias.php";
} else {
    $update_Categorie = new categories();
    $row = $update_Categorie->read_categ($_GET['id_categorie'])[0];
    include "view/actualizar_categoria.php";
}

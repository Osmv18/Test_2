<?php
//Delete a categorie
include "Model/admin_categories.php";
$delete_categories = new categories();
if(isset($_GET['id_categorie'])){
    $delete_categories->delete_categ($_GET['id_categorie']);
    include 'Controller/controller_show_categories_admin.php';
}


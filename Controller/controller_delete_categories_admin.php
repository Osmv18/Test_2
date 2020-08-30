<?php
include "model/categories.php";
$delete_categories = new categories("", $_GET['$id_categorie']);
$delete_categories->delete_categ();
include 'view/Categorias.php';


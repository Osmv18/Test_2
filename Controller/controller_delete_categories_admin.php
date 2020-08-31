<?php
include "model/admin_categories.php";
$delete_categories = new categories("", $_GET['$id_categorie']);
$delete_categories->delete_categ();
include 'Views/view_categories_admin.php';


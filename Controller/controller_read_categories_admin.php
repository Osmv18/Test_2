<?php
include_once 'Model/admin_categories.php';
$categ = new categories();
$rows_categorie = $categ->read_categ();
include 'Views/view_categories_admin.php';
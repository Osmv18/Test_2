<?php
include_once 'model/admin_categories.php';
$categ = new categories();
$rows_categorie = $categ->read_categ();

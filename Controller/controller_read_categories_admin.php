<?php
include_once 'model/categories.php';
$categ = new categories();
$rows_categorie = $categ->read_categ();

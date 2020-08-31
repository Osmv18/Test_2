<?php 
//Show all categories-admin
require_once 'Model/admin_categories.php';
$readCategorie = new categories();
$row = $readCategorie->read_categ();
include 'Views/view_categories_admin.php';
?>


<?php
require_once 'Model/admin_categories.php';
$row_Categories = new categories();
if (isset($_GET['id_categorie'])) {
    $row = $row_Categories->read_categ($_GET['id_categorie'])[0];
    include "Views/view_categorie_admin.php";
} else {
    $rows = $row_Categories->read_categ();
    include "Views/view_categories_admin.php";
}

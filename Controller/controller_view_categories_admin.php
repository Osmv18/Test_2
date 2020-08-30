<?php
require_once "model/admin_categories.php";
$row_Categories = new categories();
if (isset($_GET['$id_categorie'])) {
    $row = $row_Categories->read_categ($_GET['$id_categorie'])[0];
    include "view/vistaCategoria.php";
} else {
    $rows = $row_Categories->read_categ();
    include "view/Categorias.php";
}

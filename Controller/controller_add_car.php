<script>
  function addCarrito(lista) {
    var carrito = JSON.parse(localStorage.getItem("carrito"));
    carrito.push(lista);
    localStorage.setItem("carrito", JSON.stringify(carrito));
  }
</script>
<?php
//Add sales car/ only add
require_once 'Model/Products_Model.php';
$addProd = new Products_Model();
$lista = "";
if (isset($_GET['id_product'])) {
  $rows = $addProd->readProduct($_GET['id_product'])[0];
  $lista = json_encode((array) $rows);
  echo '<script>
      var data = ' . $lista . ';
      addCarrito(data);
    </script>';
  include 'Controller/controller_view_products.php';
} else {
  $rows = $addProd->readProduct()[0];
  include 'Views/view_car.php';
}
?>

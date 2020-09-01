<body background='Images/back9.jpg'>
    <?php include 'Views/header.php'; ?>
<div class="container" id="tablaProductos">
  <div class="col-xs-12 col-sm-12 col-md-8">
    <table class="table">
      <thead id="tableRandom">
	<tr>
	  <th scope="col">Código</th>
	  <th scope="col">Producto</th>
	  <th scope="col">Categoria</th>
	  <th scope="col">Precio</th>
	  <th scope="col">Existencia</th>
	  <th scope="col">Descripción</th>
	  <th scope="col">Acciones</th>
	</tr>
      </thead>
      <tbody>
	<?php
	foreach ($rows as $value) {
	  ?>
  	<tr>
  	  <th scope="row"><?php echo $value->id_product; ?></th>
  	  <td><?php echo $value->name_product; ?></td>
  	  <td><?php echo $value->categorie; ?></td>
  	  <td><?php echo $value->price; ?></td>
  	  <td><?php echo $value->quantity; ?></td>
  	  <td><div><?php echo $value->description; ?></div></td>
  	  <td><a href='?c=controller_view_general_product&id_product=<?php echo $value->get_attribute("id_product"); ?>'class="btn btn-info">Ver</a></td>
  	  <td><a href='?c=controller_add_car&id_product=<?php echo $value->get_attribute("id_product"); ?>' class="btn btn-success">Añadir</a></td>
  	</tr>
	  <?php
	}
	?>
      </tbody>
    </table>
  </div>
</div>
</body>
<?php include 'Views/footer.php'; ?>

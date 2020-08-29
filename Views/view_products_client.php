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
  	  <!--Alerta para indicar que hay menos de 5-->
	    <?php
	    if ($value->quantity < 5) {
	      echo '<div class="alert alert-danger" role="alert"> Quedan menos de 5 en ' . $value->name_product . '<br> Cantidad: ' . $value->quantity . '</div>';
	    }
	    ?>
  	  <td><?php echo $value->quantity; ?></td>
  	  <td><div><?php echo $value->description; ?></div></td>
  	  <!--<td><a href='?c=ver&id=<?//php echo $value->get_attribute("id"); ?>'>Ver</a></td>
  	  <!--<td><a href='?c=delete&id=<?//php echo $value->get_attribute("id"); ?>'>Borrar</a></td>-->

  	</tr>
	  <?php
	}
	?>
      </tbody>
    </table>
  </div>
</div>


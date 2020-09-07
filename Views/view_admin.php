<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card my-5 bg-light mb-3">
	<div class="card-header text-center">
	  <strong><?php echo $row->name_product ?></strong>
	  <?php if ($row->quantity < 6) { ?>
  	  <span class="float-right badge badge-danger p-1 text-uppercase">¡Quedan pocos!</span>
	  <?php } ?>
	</div>
	<div class="card-body">
	  <h5 class="card-title">Detalles de Producto</h5>
	  <table class="table">
	    <tbody>
	      <tr>
		<th scope="row">Precio:</th>
		<td><?php echo $row->price; ?></td>
	      </tr>
	      <tr>
		<th scope="row">Categoria</th>
		<td><?php echo $row->name_categorie->name_categorie; ?></td>
	      </tr>
	      <tr>
		<th scope="row">Cantidad:</th>
		<td><?php echo $row->quantity; ?></td>
	      </tr>
	      <tr>
		<th scope="row">Descripción:</th>
		<td><?php echo $row->description; ?></td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<div class="card-footer bg-transparent border-success">
	  <a href="?c=controller_show_products_admin">Volver</a>
	  <div class="text-right"><a href="?c=controller_update_products_admin&id_product=<?php echo $row->get_attribute("id_product"); ?>">Editar</a></div>
	</div>
      </div>
    </div>
  </div>
</div>


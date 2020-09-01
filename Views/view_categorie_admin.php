<?php include 'Views/view_header_admin.php'; ?>
<div class="col-md-6 offset-md-3">
  <div class="card my-5 bg-light mb-3">
    <div class="card-header text-center">
    </div>
    <div class="card-body">
      <h5 class="card-title">Detalles de Categoria</h5>
      <table class="table">
	<tbody>
	<th scope="row">Categoria:</th>
	<td><?php echo $row->name_categorie; ?></td>
	</tbody>
      </table>
    </div>
    <div class="card-footer bg-transparent border-success">
      <a href="?c=controller_show_categories_admin"> Volver</a>
      <div class="text-center">
	<a href="?c=controller_prod_categories_admin&id_categorie=<?php echo $row->get_attribute("id_categorie"); ?>"> Ver
	  Producto</a>
	<div class="text-right">
	  <a href="?c=controller_update_categ_admin&id_categorie=<?php echo $row->get_attribute("id_categorie"); ?>">
	    Editar</a>
	</div>
      </div>
    </div>
  </div>  
</div>


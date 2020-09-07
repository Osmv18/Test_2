<div class="col-md-6 offset-md-3">
  <div class="card my-5 bg-light mb-3">
    <div class="card-header text-center">
    </div>
    <div class="card-body">
      <h5 class="card-title">Detalles de Categoria</h5>
      <table class="table">
	<tbody>
	  <tr>
	    <?php foreach ($rows as $row) { ?>
  	    <th scope="row">Producto:</th>
  	    <td><?php echo $row->name_product ?></td>
	    <?php } ?>
	  </tr>
	</tbody>
      </table>
    </div>
    <div class="card-footer bg-transparent border-success">
      <a href="?c=controller_show_categories_admin"> &lt; Volver</a>
    </div>
  </div>
</div>
</div
</div>


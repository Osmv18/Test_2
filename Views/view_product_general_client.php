<br>
<div class="container" id="partMainProduc">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-9">
      <table class="table">
	<thead>
	  <tr>
	    <th scope="col">Producto</th>
	    <th scope="col">Categoria</th>
	    <th scope="col">Precio</th>
	    <th scope="col">Cantidad</th>
	    <th scope="col">Descripcion</th>
	  </tr>
	</thead>
	<tbody>
	  <tr>
	    <th scope="row"><?php echo $rows->name_product; ?></th>
	    <td><?php echo $rows->categorie; ?></td>
	    <td><?php echo $rows->price; ?></td>
	    <td><?php echo $rows->quantity; ?></td>
	    <td><?php echo $rows->description; ?></td>	      
	  </tr>
	</tbody>
      </table>
      <a class="btn btn-secondary" href="?c=controller_view_products" role="button">Atrás</a>
    </div>
  </div>  
</div>
</body>

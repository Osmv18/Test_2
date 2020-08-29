<br>
<div class="container" id="partMainProduc">
  <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-9">
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Producto</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Cantidad</th>
	      <th scope="col">Categoria</th>
	      <th scope="col">Descripcion</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row"><?php echo $rows->nombre; ?></th>
	      <td><?php echo $rows->precio; ?></td>
	      <td><?php echo $rows->cantidad; ?></td>
	      <td><?php echo $rows->categoria; ?></td>
	      <td><?php echo $rows->descripcion; ?></td>
	      <?php if($rows->cantidad < 5){
		echo '<div class="alert alert-danger" role="alert"> Quedan menos de 5 en '.$rows->nombre.'<br> Cantidad: '.$rows->cantidad.'</div>';
	      } ?>
	    </tr>
	  </tbody>
	</table>
      </div>
  </div>  
</div>

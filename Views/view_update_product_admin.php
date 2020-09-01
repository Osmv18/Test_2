<?php include 'Views/view_header_admin.php'; ?>
<form method="POST" action="?c=controller_update_products_admin">
  <div class="block-header">
    <h3 class="block-title">Ingresar nuevo producto</h3>
  </div>
  <div class="form-group">
    <label for="name_product">Producto</label>
    <input type="text" maxlenght="255" class="form-control" name="name_product" id="name_product"
	   value="<?php echo $row->get_attribute("name_product"); ?>">
  </div>
  <div class="form-group">
    <label for="price">Precio</label>
    <input type="text" maxlenght="255" class="form-control" name="price" id="price"
	   value="<?php echo $row->get_attribute("price"); ?>">
  </div>
  <div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="text" maxlenght="255" class="form-control" name="quantity" id="quiantity"
	   value="<?php echo $row->get_attribute("quantity"); ?>">
  </div>

  <div class="form-group">
    <label for="description">Descripcion</label>
    <textarea class="card-text font-italic" name="description" id="description" rows="10"
	      cols="50"><?php echo $row->description; ?></textarea>
  </div>
  <input type="hidden" name="id_product" value="<?php echo $row->get_attribute("id_product"); ?>">
  <input type="hidden" name="id_categorie" value="<?php echo $row->get_attribute("id_categorie"); ?>">
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>



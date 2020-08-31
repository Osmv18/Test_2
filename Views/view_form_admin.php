<?php include 'Views/view_header_admin.php'; ?>
<form method="POST" action="?c=controller_create_prod_admin">
  <div class="block-header">
    <h3 class="block-title">Ingresar nuevo producto</h3>
  </div>
  <div class="form-group">
    <label for="name_product">Producto</label>
    <input type="text" maxlenght="255" class="form-control" name="name_product" id="name_product">
  </div>
  <div class="form-group">
    <select class="form-control"  name="id_categorie" id="id_categorie">
      <?php include 'controller/controller_read_categories_admin.php' ?>
      <?php foreach ($rows_categorie as $row) { ?>
        <option value="<?php echo $row->id_categorie ?>"><?php echo $row->name_categorie ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <label for="price">Precio</label>
    <input type="text" maxlenght="255" class="form-control" name="price" id="price">
  </div>
  <div class="form-group">
    <label for="quantity">Cantidad</label>
    <input type="text" maxlenght="255" class="form-control" name="quantity" id="quantity">
  </div>

  <div class="form-group">
    <label for="description">Descripción</label>
    <textarea class="card-text font-italic" name="description" id="description" rows="10" cols="50"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>


<form method="POST" action="?c=controller_update_categ_admin">
    <div class="form-group">
        <label for="id_categorie">Codigo</label>
        <input type="text" maxlenght="255" class="form-control" name="id_categorie" id="id_categorie"
               value="<?php echo $row->get_attribute("id_categorie"); ?>">
    </div>
    <div class="form-group">
        <label for="name_categorie">Categoria</label>
        <input type="text" maxlenght="255" class="form-control" name="name_categorie" id="name_categorie"
               value="<?php echo $row->get_attribute("name_categorie"); ?>">
    </div>
    <input type="hidden" name="id_categorie" value="<?php echo $row->get_attribute("id_categorie"); ?>">
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>


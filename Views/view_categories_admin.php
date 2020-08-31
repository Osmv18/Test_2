<?php include 'Views/view_header_admin.php'; ?>
<div class="starter-template">

    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Categorias</h3>
        </div>
        <div class="block-content">
            <p class="font-size-sm text-muted">
            </p>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($row as $rows) { ?>
                    <tr>
                        <td><?php echo $rows->id_categorie; ?></td>
                        <td><?php echo $rows->name_categorie; ?></td>
                        <td>
                            <a href="?c=controller_view_categories_admin&id_categorie=<?php echo $rows->get_attribute("id_categorie"); ?>">Ver</a>
                            <a href="?c=controller_delete_categories_admin&id_categorie=<?php echo $rows->get_attribute("id_categorie"); ?>">Borrar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php include 'Views/view_header_admin.php'; ?>
<div class="starter-template">

    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Productos</h3>
        </div>
        <div class="block-content">
            <p class="font-size-sm text-muted">
            </p>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($rows as $row){ ?>
                    <tr>
                        <td><?php echo $row->id_product; ?></td>
                        <td><?php echo $row->name_product; ?></td>
                        <td><?php echo $row->name_categorie->name_categorie ?></td>
                        <td><?php echo $row->quantity; ?></td>
                        <td><?php echo $row->price; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td>
                            <a href="?c=controller_view_product_admin&id_product=<?php echo $row->get_attribute("id_product"); ?>">Ver</a>
                            <a href="?c=controller_delete_products_admin&id_product=<?php echo $row->get_attribute("id_product"); ?>">Borrar</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


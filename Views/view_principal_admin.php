<div class="starter-template">

    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Inventario</h3>
        </div>
        <div class="block-content">
            <p class="font-size-sm text-muted">
            </p>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Alertas</th>
                </tr>
                </thead>
                <tbody>
                <?php include 'controller/controller_principal_admin.php' ?>
                <?php foreach($rows as $row){ ?>
                    <tr>
                        <td><?php echo $row->name_product; ?></td>
                        <td><?php echo $row->quantity; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php if ($row->quantity < 6) { ?>
                                <span class=" badge badge-danger p-1 text-uppercase">¡Quedan pocas unidades!</span>
                            <?php } ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

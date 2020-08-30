<div class="col-md-6 offset-md-3">
    <div class="card my-5 bg-light mb-3">
        <div class="card-header text-center">
        </div>
        <div class="card-body">
            <h5 class="card-title">Detalles de Categoria</h5>
            <table class="table">
                <tbody>
                <th scope="row">Categoria:</th>
                <td><?php echo $row->categories ?></td>
                </tbody>
            </table>
        </div>
        <div class="card-footer bg-transparent border-success">
            <a href="?c=mostrar_categoria"> Volver</a>
            <div class="text-center">
                <a href="?c=prod_categoria&id_categoria=<?php echo $row->get_attribute("id_categoria"); ?>"> Ver
                    Producto</a>
                <div class="text-right">
                    <a href="?c=actualizar_categ&id_categoria=<?php echo $row->get_attribute("id_categoria"); ?>">
                        Editar</a>
                </div>
            </div>
        </div>
    </div
</div>


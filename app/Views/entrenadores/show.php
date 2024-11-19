<div class="container">

<div class="row">
    <div class="col">
        <h1>Entrenadores</h1>
        <a href="<?=base_url('entrenadores/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($arbitro); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idEntrenador</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Sexo</th>
                    <th>Correo</th>
                    <th>Telefono</th>

                </thead>
                <tbody>
                    <?php foreach($entrenador as $key) : ?>
                        <tr>
                        <td><?=$key->idEntrenador ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->aPaterno ?></td>
                        <td><?=$key->aMaterno ?></td>
                        <td><?=$key->fechaNacimiento ?></td>
                        <td><?=$key->sexo ?></td>
                        <td><?=$key->correo ?></td>
                        <td><?=$key->numTelefono ?></td>
                        
                        <td>
                            <a href="<?=base_url('entrenador/delete/'.$key->idEntrenador);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('entrenador/edit/'.$key->idEntrenador);?> " class="btn btn-warning">Editar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
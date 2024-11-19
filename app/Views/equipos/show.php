<div class="container">

<div class="row">
    <div class="col">
        <h1>Equipos</h1>
        <a href="<?=base_url('equipos/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($arbitro); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idEquipo</th>
                    <th>Nombre</th>
                    <th>Entrenador</th>
                    <th>Uniforme</th>
                    <th>Escudo</th>

                </thead>
                <tbody>
                    <?php foreach($equipo as $key) : ?>
                        <tr>
                        <td><?=$key->idEquipo ?></td>
                        <td><?=$key->nombre?></td>
                        <td><?=$key->idEntrenador ?></td>
                        <td><?=$key->uniforme ?></td>
                        <td><?=$key->escudo ?></td>
                        
                        
                        <td>
                            <a href="<?=base_url('equipos/delete/'.$key->idEquipo);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('equipo/edit/'.$key->idEquipo);?> " class="btn btn-warning">Editar</a>

                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
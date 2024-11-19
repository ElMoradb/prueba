<div class="container">

<div class="row">
    <div class="col">
        <h1>Jugadores</h1>
        <a href="<?=base_url('jugadores/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($arbitro); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idJugador</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Numero de Camiseta</th>
                    <th>Posicion</th>
                    <th>Equipo</th>
                    <th>Peso</th>
                    <th>Altura</th>
                    <th>Pie Habil</th>
                    <th>Telefono</th>
                    <th>Goles</th>
                    <th>Asistencias</th>
                    <th>Tarjetas Amarillas</th>
                    <th>Tarjetas Rojas</th>
                    <th>Foto</th>

                </thead>
                <tbody>
                    <?php foreach($jugador as $key) : ?>
                        <tr>
                        <td><?=$key->idJugador ?></td>
                        <td><?=$key->nombre ?></td>
                        <td><?=$key->aPaterno ?></td>
                        <td><?=$key->aMaterno ?></td>
                        <td><?=$key->fechaNacimiento ?></td>
                        <td><?=$key->nCamiseta ?></td>
                        <td><?=$key->posicion ?></td>
                        <td><?=$key->idEquipo ?></td>
                        <td><?=$key->peso ?></td>
                        <td><?=$key->altura ?></td>
                        <td><?=$key->pieHabil ?></td>
                        <td><?=$key->numTelefono ?></td>
                        <td><?=$key->goles ?></td>
                        <td><?=$key->asistencias ?></td>
                        <td><?=$key->tarjetasAmarillas ?></td>
                        <td><?=$key->tarjetasRojas ?></td>
                        <td><?=$key->foto ?></td>
                        
                        <td>
                            <a href="<?=base_url('jugador/delete/'.$key->idJugador);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('jugadores/edit/'.$key->idJugador);?> " class="btn btn-warning">Editar</a>
                        
                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
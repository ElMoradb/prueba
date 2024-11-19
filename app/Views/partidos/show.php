<div class="container">

<div class="row">
    <div class="col">
        <h1>Partido</h1>
        <a href="<?=base_url('partidos/add/');?> " class="btn btn-success">Agregar</a>
    </div>
</div>

<?php //echo "aqui"; print_r($arbitro); ?>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <th>idPartido</th>
                    <th>idCancha</th>
                    <th>idArbitro</th>
                    <th>horaInicio</th>
                    <th>idLocal</th>
                    <th>idVisitante</th>

                </thead>
                <tbody>
                    <?php foreach($partido as $key) : ?>
                        <tr>
                        <td><?=$key->idPartido?></td>    
                        <td><?=$key->idCancha?></td>
                        <td><?=$key->idArbitro ?></td>
                        <td><?=$key->horaInicio ?></td>
                        <td><?=$key->idLocal ?></td>
                        <td><?=$key->idVisitante ?></td>
                        
                        
                        <td>
                            <a href="<?=base_url('partidos/delete/'.$key->idPartido);?> " class="btn btn-danger">Borrar</a>
                            <a href="<?=base_url('partidos/edit/'.$key->idPartido);?> " class="btn btn-warning">Editar</a>

                        </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
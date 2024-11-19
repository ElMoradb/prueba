<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($equipo); ?>
        <h2>Actualizar Equipo</h2>
    <form action="<?=base_url('equipos/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" value="<?=$equipo[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="Nombre">

            <label for="idEntrenador" class="form-label">Entrenador</label>
            <select class="form-select" aria-label="Default select example" name="idEntrenador" id="idEntrenador">
                <?php foreach ($entrenador as $key) :?>
                    <option value='<?=$key->idEntrenador ?> '>  <?=$key->nombre ?> </option>
                <?php endforeach ?>
                </select>
                      
            <label for="uniforme" class="form-label">Uniforme</label>
            <input name="uniforme" type="text" value="<?=$equipo[0]->uniforme; ?>"
                      class="form-control" id="uniforme" placeholder="Uniforme">

            <label for="escudo" class="form-label">Escudo</label>
            <input name="escudo" type="text" value="<?=$equipo[0]->escudo; ?>"
                      class="form-control" id="escudo" placeholder="Escudo">

            <input type="hidden" name="idequipo" value="<?=$equipo[0]->idEquipo;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">
        <a type= "button" href="<?=base_url('/equipos');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
    
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($cancha); ?>
        <h2>Actualizar Cancha</h2>
    <form action="<?=base_url('canchas/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="cancha" class="form-label">Cancha</label>
            <input name="cancha" type="text" value="<?=$cancha[0]->cancha; ?>"
                 class="form-control" id="cancha" placeholder="Cancha">

            <label for="direccion" class="form-label">Direccion</label>
            <input name="direccion" type="text" value="<?=$cancha[0]->cancha; ?>"
                 class="form-control" id="direccion" placeholder="Direccion">

            <label for="capacidad" class="form-label">Capacidad</label>
            <input name="capacidad" type="number" value="<?=$cancha[0]->cancha; ?>"
                 class="form-control" id="capacidad" placeholder="Capacidad">

            <input type="hidden" name="idcancha" value="<?=$cancha[0]->idCancha;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">
        <a type= "button" href="<?=base_url('/canchas');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
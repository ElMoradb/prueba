<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Equipo</h2>
    <form action="<?=base_url('equipos/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">

            <label for="idEntrenador" class="form-label">Entrenador</label>
            <select class="form-select" required aria-label="select example" name="idEntrenador" id="idEntrenador">
            <option value="">Elige un Entrenador</option>
                <?php foreach ($entrenador as $key) :?>
                    <option value='<?=$key->idEntrenador ?> '>  <?=$key->nombre ?> </option>
                <?php endforeach ?>
                </select>

            <label for="uniforme" class="form-label">Uniforme</label>
            <input name="uniforme" type="text" class="form-control" id="uniforme" placeholder="Uniforme">

            <label for="escudo" class="form-label">Escudo</label>
            <input name="escudo" type="text" class="form-control" id="escudo" placeholder="Escudo">


        </div>

        
        <input type="submit" class="btn btn-success" value="Guardar">
        <a type= "button" href="<?=base_url('/equipos');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
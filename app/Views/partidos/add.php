<div class="container">
    <div class="row">
        <div class="col">

        <h2>Partido</h2>
    <form action="<?=base_url('partidos/insert'); ?>" method="POST">
        <div class="mb-3">
           
            <label for="horaInicio" class="form-label">Hora de Inicio</label>
            <input name="horaInicio" type="datetime" class="form-control" id="horaInicio" placeholder="Hora de Inicio">

            <label for="idCancha" class="form-label">Cancha</label>
            <select class="form-select" aria-label="Default select example" name="idCancha" id="idCancha">
                <?php foreach ($cancha as $key) :?>
                    <option value='<?=$key->idCancha ?> '>  <?=$key->cancha ?> </option>
                <?php endforeach ?>
                </select>

            <label for="idArbitro" class="form-label">Arbitro</label>
            <select class="form-select" aria-label="Default select example" name="idArbitro" id="idArbitro">
                <?php foreach ($arbitro as $key) :?>
                    <option value='<?=$key->idArbitro ?> '>  <?=$key->nombre ?> </option>
                <?php endforeach ?>
                </select>


            <label for="idLocal" class="form-label">Local</label>
            <select class="form-select" aria-label="Default select example" name="idLocal" id="idVisitante">
                <?php foreach ($equipo as $key) :?>
                    <option value='<?=$key->idEquipo ?> '>  <?=$key->nombre ?> </option>
                <?php endforeach ?>
                </select>

            <label for="idVisitante" class="form-label">Visitante</label>
            <select class="form-select" aria-label="Default select example" name="idVisitante" id="idVisitante">
                <?php foreach ($equipo as $key) :?>
                    <option value='<?=$key->idEquipo ?> '>  <?=$key->nombre ?> </option>
                <?php endforeach ?>
                </select>

        </div>
        

        
        <input type="submit" class="btn btn-success" value="Guardar Alv">
        <a type= "button" href="<?=base_url('/partidos');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
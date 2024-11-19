<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($entrenador); ?>
        <h2>Actualizar Entrenador</h2>
    <form action="<?=base_url('entrenadores/update/'); ?>" method="POST">
        <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input name="nombre" type="text" value="<?=$entrenador[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="Nombre">
                 
            <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" value="<?=$entrenador[0]->aPaterno; ?>"
                 class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" value="<?=$entrenador[0]->aMaterno; ?>"
                 class="form-control" id="aMaterno" placeholder="Apellido Materno">
                 
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fechaNacimiento" type="date" value="<?=$entrenador[0]->fechaNacimiento; ?>"
                 class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">
            
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
                 
            <label for="correo" class="form-label">Correo</label>
            <input name="correo" type="text" value="<?=$entrenador[0]->correo; ?>"
                 class="form-control" id="correo" placeholder="Correo">

            <label for="numTelefono" class="form-label">Telefono</label>
            <input name="numTelefono" type="text" value="<?=$entrenador[0]->numTelefono; ?>"
                 class="form-control" id="numTelefono" placeholder="Telefono">

           <input type="hidden" name="identrenador" value="<?=$entrenador[0]->idEntrenador;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">
        <a type= "button" href="<?=base_url('/entrenadores');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
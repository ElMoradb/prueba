<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($arbitro); ?>
        <h2>Actualizar Arbitro</h2>
    <form action="<?=base_url('arbitros/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" value="<?=$arbitro[0]->nombre; ?>"
                 class="form-control" id="nombre" placeholder="Arbitro">

            <label for="aPaterno" class="form-label">Apellido Paterno</label>
             <input name="aPaterno" type="text" value="<?=$arbitro[0]->aPaterno; ?>"
                 class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" value="<?=$arbitro[0]->aMaterno; ?>"
                 class="form-control" id="aMaterno" placeholder="Apellido Materno">
                 

            <label for="fechaNacimiento" class="form-label">fechaNacimiento</label>
            <input name="fechaNacimiento" type="date" value="<?=$arbitro[0]->fechaNacimiento; ?>"
                 class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">

            <label for="telefono" class="form-label">Telefono</label>
            <input name="telefono" type="text" value="<?=$arbitro[0]->telefono; ?>"
                 class="form-control" id="telefono" placeholder="Telefono">

           <input type="hidden" name="idarbitro" value="<?=$arbitro[0]->idArbitro;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">
        <a type= "button" href="<?=base_url('/arbitros');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>       
    </form>
    
    </div>
    </div>
</div>
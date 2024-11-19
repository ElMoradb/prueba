<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Entrenador</h2>
    <form action="<?=base_url('entrenadores/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">

            <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" class="form-control" id="aMaterno" placeholder="Apellido Materno">

            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fechaNacimiento" type="date" class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">

            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" aria-label="Default select example" name="sexo" id="sexo">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>

            <label for="correo" class="form-label">Correo</label>
            <input name="correo" type="text" class="form-control" id="correo" placeholder="Correo">

            <label for="numTelefono" class="form-label">Telefono</label>
            <input name="numTelefono" type="text" class="form-control" id="numTelefono" placeholder="Telefono">

        </div>
        

        
        <input type="submit" class="btn btn-success" value="Guardar">
        <a type= "button" href="<?=base_url('/entrenadores');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
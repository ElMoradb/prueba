<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Cancha</h2>
    <form action="<?=base_url('canchas/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="cancha" class="form-label">Nombre</label>
            <input name="cancha" type="text" class="form-control" id="cancha" placeholder="Nombre">
            <label for="direccion" class="form-label">Dirección</label>
            <input name="direccion" type="text" class="form-control" id="direccion" placeholder="Dirección">
            <label for="capacidad" class="form-label">Capacidad</label>
            <input name="capacidad" type="number" class="form-control" id="capacidad" placeholder="Capacidad">
        </div>
        <input type="submit" class="btn btn-success" value="Guardar">
        <a type= "button" href="<?=base_url('/canchas');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
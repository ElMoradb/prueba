<div class="container">
    <div class="row">
        <div class="col">

        <h2>Agregar Jugador</h2>
    <form action="<?=base_url('jugadores/insert'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre">

            <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" class="form-control" id="aMaterno" placeholder="Apellido Materno">

            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fechaNacimiento" type="date" class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">

            <label for="nCamiseta" class="form-label">Numero de Camiseta</label>
            <input name="nCamiseta" type="text" class="form-control" id="nCamiseta" placeholder="Numero de Camiseta">

            <label for="posicion" class="form-label">Posicion</label>
            <input name="posicion" type="text" class="form-control" id="posicion" placeholder="Posicion">

            <label for="idEquipo" class="form-label">Equipo</label>
            <select class="form-select" aria-label="Default select example" name="idEquipo" id="idEquipo">
                <option selected>Jugador</option>
                <option value="1">C1</option>
                <option value="2">C2</option>
                <option value="3">C3</option>
                </select>

            <label for="peso" class="form-label">Peso</label>
            <input name="peso" type="text" class="form-control" id="peso" placeholder="Peso">

            <label for="altura" class="form-label">Altura</label>
            <input name="altura" type="text" class="form-control" id="altura" placeholder="Altura">

            <label for="pieHabil" class="form-label">Pie Habil</label>
            <input name="pieHabil" type="text" class="form-control" id="pieHabil" placeholder="Pie Habil">

            <label for="numTelefono" class="form-label">Telefono</label>
            <input name="numTelefono" type="text" class="form-control" id="numTelefono" placeholder="Telefono">

            <label for="goles" class="form-label">Goles</label>
            <input name="goles" type="text" class="form-control" id="goles" placeholder="Goles">

            <label for="asistencias" class="form-label">Asistencias</label>
            <input name="asistencias" type="text" class="form-control" id="asistencias" placeholder="Asistencias">

            <label for="tarjetasAmarillas" class="form-label">Tarjetas Amarillas</label>
            <input name="tarjetasAmarillas" type="text" class="form-control" id="tarjetasAmarillas" placeholder="Tarjetas Amarillas">

            <label for="tarjetasRojas" class="form-label">Tarjetas Rojas</label>
            <input name="tarjetasRojas" type="text" class="form-control" id="tarjetasRojas" placeholder="Tarjetas Rojas">

            <label for="foto" class="form-label">Foto</label>
            <input name="foto" type="text" class="form-control" id="foto" placeholder="Foto">

        </div>

        
        <input type="submit" class="btn btn-success" value="Guardar">
        <a type= "button" href="<?=base_url('/jugadores');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
<?php print_r($jugador); ?>
        <h2>Actualizar Jugador</h2>
    <form action="<?=base_url('jugadores/update/'); ?>" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" value="<?=$jugador[0]->nombre; ?>"
                 class="form-control" id="jugador" placeholder="Nombre">
                 
            <label for="aPaterno" class="form-label">Apellido Paterno</label>
            <input name="aPaterno" type="text" value="<?=$jugador[0]->aPaterno; ?>"
                 class="form-control" id="aPaterno" placeholder="Apellido Paterno">

            <label for="aMaterno" class="form-label">Apellido Materno</label>
            <input name="aMaterno" type="text" value="<?=$jugador[0]->aMaterno; ?>"
                 class="form-control" id="aMaterno" placeholder="Apellido Materno">
                 
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input name="fechaNacimiento" type="date" value="<?=$jugador[0]->fechaNacimiento; ?>"
                 class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento">
 
            <label for="nCamiseta" class="form-label">Numero de Camiseta</label>
            <input name="nCamiseta" type="text" value="<?=$jugador[0]->nCamiseta; ?>"
                 class="form-control" id="nCamiseta" placeholder="Numero de Camiseta">

            <label for="posicion" class="form-label">Posicion</label>
            <input name="posicion" type="text" value="<?=$jugador[0]->posicion; ?>"
                 class="form-control" id="posicion" placeholder="Posicion">

            <label for="idEquipo" class="form-label">Equipo</label>
            <input name="idEquipo" type="text" value="<?=$jugador[0]->idEquipo; ?>"
                 class="form-control" id="idEquipo" placeholder="Equipo">

            <label for="peso" class="form-label">Peso</label>
            <input name="peso" type="text" value="<?=$jugador[0]->peso; ?>"
                 class="form-control" id="peso" placeholder="Peso">

            <label for="altura" class="form-label">Altura</label>
            <input name="altura" type="text" value="<?=$jugador[0]->altura; ?>"
                 class="form-control" id="altura" placeholder="Altura">

            <label for="pieHabil" class="form-label">Pie Habil</label>
            <input name="pieHabil" type="text" value="<?=$jugador[0]->pieHabil; ?>"
                 class="form-control" id="pieHabil" placeholder="Pie Habil">

            <label for="numTelefono" class="form-label">Numero de Telefono</label>
            <input name="numTelefono" type="text" value="<?=$jugador[0]->numTelefono; ?>"
                 class="form-control" id="numTelefono" placeholder="Numero de Telefono">

            <label for="goles" class="form-label">Goles</label>
            <input name="goles" type="text" value="<?=$jugador[0]->goles; ?>"
                 class="form-control" id="goles" placeholder="Goles">

            <label for="asistencias" class="form-label">Asistencias</label>
            <input name="asistencias" type="text" value="<?=$jugador[0]->asistencias; ?>"
                 class="form-control" id="asistencias" placeholder="Asistencias">

            <label for="tarjetasAmarillas" class="form-label">Tarjetas Amarillas</label>
            <input name="tarjetasAmarillas" type="text" value="<?=$jugador[0]->tarjetasAmarillas; ?>"
                 class="form-control" id="tarjetasAmarillas" placeholder="Tarjetas Amarillas">

            <label for="tarjetasRojas" class="form-label">Tarjetas Rojas</label>
            <input name="tarjetasRojas" type="text" value="<?=$jugador[0]->tarjetasRojas; ?>"
                 class="form-control" id="tarjetasRojas" placeholder="Tarjetas Rojas">

            <label for="foto" class="form-label">Foto</label>
            <input name="foto" type="text" value="<?=$jugador[0]->foto; ?>"
                 class="form-control" id="foto" placeholder="Foto">


           <input type="hidden" name="idjugador" value="<?=$jugador[0]->idJugador;?>" >
        </div>
        <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">
        <a type= "button" href="<?=base_url('/jugadores');?> " class="btn btn-danger" name="Cancelar" value="Cancelar">Cancelar</a>
        </form>
    
    </div>
    </div>
</div>
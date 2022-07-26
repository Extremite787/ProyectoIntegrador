<?php

    include ('con_bd.php');

    //TRAER LAS MATERIAS
    $consult = "SELECT idmateria, nombremateria FROM asistenciaprototipo.materia";
    $result = mysqli_query($conex,$consult);
    //echo count($result);
    // foreach($result as $datos)
    // {
    //          echo $datos[0][0];
    // //echo "datos";
    // }
	$ids = array();

    // while (($row2 = $result->fetch_assoc()))
    // {
    //     echo $row2['idmateria']."-".$row2['nombremateria']."<br>";
        
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mail From</title>
    <link rel="stylesheet" type="text/css" href="estiloingres.css">
    <link rel="icon" href="Icono.ico">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/asistenciaIngres.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <form method="post">
        <h1 id="aparecer_id">Registro De Asistencia</h1>
        <div>Eleccion de la materia Asignada: <select id="cbx_estado" name="cbx_estado">
            <option value="0" Seleccionar Estado></option>
            <?php
            while($row = $result->fetch_assoc())
            { 
                /*echo $row2['idmateria']."-".$row2['nombremateria']."<br>";*/
            ?>
            <option value="<?php echo $row['idmateria']; ?>"><?php echo $row ['nombremateria']; ?></option>

            ?>
            <?php } ?>
    <!-- {{-- @endforeach --}} -->
    <!-- @else
    <option value="0">NO CARGA INFO CARRERA</option>
    @endif -->
        </select>
        </div>

        </select>
        <input class="caja" type="text" name="datosingresados_id" placeholder="Descripcion de la Clase Virtual Juztificacion " id="datosingresados_id">
        <input class="caja" type="text" name="ingrese_url" placeholder="Ingrese la URL de las clases" id="ingrese_url">
        <input class="caja" type="text" name="ingrese_nombre" placeholder="Ingrese su Nombre" id="ingrese_nombre">
        <input class="caja1" type="submit" name="Guardar_but" onclick="ingresarAsistenciaIngres()">        
        <p><a href="index.php">Regresar</a></p>
    </form>
    
</body>

</html>

<?php
    include("con_bd.php");
    if(isset($_POST['Registrar_but'])){
    if(strlen($_POST['password_name']) >=1 && strlen($_POST['nombre_name']) >= 1 && strlen($_POST['apellido_name']) >= 1 && strlen($_POST['cedula_name']) >= 1){
        $nombre_name = trim($_POST['nombre_name']);
        $apellido_name = trim($_POST['apellido_name']);
        $cedula_name = trim($_POST['cedula_name']);
        $consult = "INSERT INTO usuarios(nombre, apellido, cedula) VALUES ('$nombre_name','$apellido_name','$cedula_name')";
        $result = mysqli_query($conex,$consult);
        $password_name = password_hash($_POST['password_name'], PASSWORD_DEFAULT);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO registro(Fecha_reg, contra) VALUES ('$fechareg','$password_name')";
        $resultado = mysqli_query($conex,$consulta);
            if($resultado && $result){
                ?>
                <h3 class="ok">!Te has Registrado correctamente<a class="ok_envio" href="index.php"> Desea regresar a login?</a></h3>
                <p></p>
                <?php
            } else {
                ?>
                <h3 class="bad">!Ups ha ocurrido un error</h3>
                <?php
            }
    } else {
        ?>
        <h3 class="bad">!Porfavor complete los campos</h3>
        <?php
    }
}
?>
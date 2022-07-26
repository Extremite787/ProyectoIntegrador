<?php
include('con_bd.php');
$usuario_name=$_POST['usuario_name'];
$password_name=$_POST['password_name'];
session_start();

$consulta="SELECT*FROM usuarios where cedula='$usuario_name'";
$consul="SELECT*FROM registro where contra='$password_name'";
$resultado=mysqli_query($conex,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:AsistenciaIngres.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error de Ingreso de informacion</h1>
    <?php
}
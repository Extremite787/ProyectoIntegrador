<?php
include ('con_bd.php');
$accion = $_POST['accion'];
$cbx_estado = $_POST['cbx_estado'];
$datosingresados_id = $_POST['datosingresados_id'];
$ingrese_url = $_POST['ingrese_url'];
$ingrese_nombre = $_POST['ingrese_nombre'];


if($accion=="insert")
{
    //echo "accion=".$accion."<br>";
    //echo "data:".$datosingresados_id.", ".$ingrese_url.", ".$ingrese_nombre."<br>";
    insertAsistencia($cbx_estado, $datosingresados_id,$ingrese_url,$ingrese_nombre);
}

function insertAsistencia($cbx_estado, $datosingresados_id,$ingrese_url,$ingrese_nombre)
{
    global $con;
    $aDatos = array();
    $query = "INSERT INTO juztificar(idmateria,descripcionjuztificar, linkurldeclase, maestro)
    VALUES (".$cbx_estado.",'".$datosingresados_id."','".$ingrese_url."','".$ingrese_nombre."')";
    $resultado  = $con->query($query);
    if ($resultado) {
        echo "si";
    } else { 
        echo "no";
    } 
}
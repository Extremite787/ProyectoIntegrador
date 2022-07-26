<!DOCTYPE html>
<html>
<head>
    <title>Mail From</title>
    <link rel="stylesheet" type="text/css" href="estiloReg.css">
    <link rel="icon" href="Icono.ico">
</head>
<body>
    <form method="post">
        <h1 id="aparecer_id">Acceder</h1>
        <input type="text" name="nombre_name" placeholder="Nombre" id="acceder_id">
        <input type="text" name="apellido_name" placeholder="Apellido" id="acceder_id">
        <input type="text" name="cedula_name" placeholder="Cedula = Usuario" id="acceder_id">
        <input type="password" name="password_name" placeholder="Password" id="acceder_id">
        <input type="submit" name="Registrar_but" href="index.php">
        <p><a href="index.php">Login</a></p>
    </form>
    <?php
        include("guardar.php");
    ?>
</body>
</html>
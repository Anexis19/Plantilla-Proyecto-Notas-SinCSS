<?php
    require_once('../../Usuarios/Modelo/Usuarios.php');
    //Validacion de sesion
    $ModeloUsuarios = new Usuarios();
    $ModeloUsuarios->validateSession();

    //Enmvio de Id por metodo GET
    $Id = $_GET['Id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
</head>
<body>
    <h1>Eliminar Docente</h1>
    <form method="POST" action="../Controladores/delete.php">
        <input type="hidden" name="Id" value="<?php echo $Id ?>">
        <p>¿Estás seguro que deseas eliminar este docente?</p>
        <input type="submit" value="Eliminar Docente">
    </form>
</body>
</html>
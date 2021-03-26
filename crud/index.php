<?php
    require_once 'conexion.php';
    require_once 'metodos-crud.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <form action="procesos/insertar.php" method="post">
        <label for="">Nombre:</label>
        <p></p>
        <input type="text" name="nombre">
        <p></p>
        <label for="">Apellido:</label>
        <p></p>
        <input type="text" name="apellido">
        <p></p>
        <button>Insertar</button>
    </form>
    <br>
    <br>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
        </tr>
        <?php
            $obj = new Metodos();
            $datos = $obj -> mostrar_datos('SELECT nombre, apellidof FROM t_persona');
            foreach($datos as $key) {
        ?>
        <tr>
            <td><?php echo $key['nombre']?></td>
            <td><?php echo $key['apellidof']?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
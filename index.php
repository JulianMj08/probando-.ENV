<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estamos probando</h1>

    <?php
    echo "Hola mundo desde php";
    ?>

    <?php
        include './Conexion.php';



        // Crear una instancia de la clase Conexion
        $conexion = new Conexion();

        // Realizar una consulta simple
        $sql = "SELECT * FROM users_data";
        $resultado = $conexion->consultaSimple($sql);

        if ($resultado) {
            echo "<h2>Resultados de la consulta:</h2>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "ID: " . $fila['idUser'] . " - Nombre: " . $fila['nombre'] . " - Apellidos: " . $fila['apellidos'] . "<br>";
            }
        } else {
            echo "No se encontraron resultados.";
        }

        // Cerrar la conexión
        $conexion->cerrarConexion();
    ?>
</body>
</html>
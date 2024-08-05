<?php
'<br>';
echo "yeeeesss";

require 'config.php';
class Conexion {
    
    private $conexion;

    public function __construct() {
        // Crear la conexión usando las constantes de la clase
        $this->conexion = new mysqli($_ENV['SERVIDOR'],$_ENV['USUARIO'],$_ENV['CONTRASENA'],$_ENV['BD']);

        // Verificar la conexión
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        } else {
            echo "Conexión exitosaaaaaaa<br>";
        }
    }

    // Método para obtener la conexión
    public function getConexion() {
        return $this->conexion;
    }

    // Método para cerrar la conexión
    public function cerrarConexion() {
        $this->conexion->close();
    }

    // Método para una consulta simple
    public function consultaSimple($sql) {
        $resultado = $this->conexion->query($sql);

        if ($resultado->num_rows > 0) {
            return $resultado;
        } else {
            return false;
        }
    }
}

?>
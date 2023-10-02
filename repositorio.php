<?php
require_once "env.php";

class Repositorio{
    private static $conexion = null;

    public function __construct(){
    if (is_null(self::$conexion)){
        $credenciales = credenciales();
        self::$conexion = new mysqli(
            $credenciales['servername'],
            $credenciales['username'],
            $credenciales['password'],
            $credenciales['dbname'],
        );
        if (self::$conexion->connect_error){
            $error = 'Error de conexion: ' . self::$conexion->connect_error;
            self::$conexion = null;
            die($error);
        }
        self::$conexion->set_charset('utf8mb4_general_ci ');
        self::$conexion->close();  
    }
    /*$sql = "CREATE TABLE usuarios (
        id int(10) unsigned NOT NULL AUTO_INCREMENT,
        nombre_usuario varchar(45) NOT NULL,
        clave varchar(255) NOT NULL,
        nombre varchar(200) NOT NULL,
        apellido varchar(200) NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY usuario (nombre_usuario)
      ) ENGINE=InnoDB;";

    if (self::$conexion->query($sql) === TRUE) {
    echo "Table creada correctamente";
    } else {
    echo "Error creando la tabla: " . self::$conexion->error;
    }*/
    
    self::$conexion->close();
    }
}
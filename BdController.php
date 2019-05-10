<?php
class BdController{
    public function dataConnection(){
            $host_data = array(
                "host" => "localhost",
                "db"=>"practica",
                "username" => "root",
                "password" => "",
                "charset" => "latin1"
            );
        return $host_data;
    }   
    public static function conn($host_data){
        $conexion = mysqli_connect($host_data['host'],$host_data['username'],$host_data['password'], $host_data['db']);
        if (!$conexion) {
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "err no de depuracion: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuracion: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
        if (!$conexion->set_charset($host_data['charset'])) {
            printf("Error cargando el conjunto de caracteres latin1: %s\n", $conexion->error);
            exit();
        }
        return $conexion;
    }
}
?>
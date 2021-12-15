<?php
    require_once $_SERVER ['DOCUMENT_ROOT'] . "/admindbmongo/vendor/autoload.php";
    
    class Conexion{
        public static function conectar(){
            $servidor = "127.0.0.1";
            $puerto = "27017";
            $usuario = "escritor";
            $password = "123456";
            $BD = "crudmongo";
            $cadenaConexion = "mongodb://".$usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/" . $BD;
            try{$cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($BD);
            }catch (\Throwable $th){
                return $th;
            }
            
        }
    }


?> 
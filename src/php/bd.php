<?php

class Bd{

    private $conn = "";


    public function __construct() {

         $host = "localhost";
         $user = "root";
         $password = "";
         $bd = "e_commerce";

         $this->conn = $this->conexion($host,$user,$password,$bd);
        
    }


    private function conexion($host,$user,$password,$bd){

        $conn = new mysqli($host,$user,$password,$bd);
    
        if ($conn->connect_error) {
            throw new Error('no se pudo acceder al gestor'.mysqli_error($conn));
        }    
    
        return $conn;
    
    }

    
    function query($sentecia){

        $result = $this->conn->query($sentecia);

        return $result;
        
    }


};



// $destacados = [
//     "../public/assets/img/cancion de hielo y fuego-choque de reyes.webp",
//     "../public/assets/img/cancion de hielo y fuego-danza de dragones.webp",
//     "../public/assets/img/cancion de hielo y fuego-festin de cuervos.webp",
//     "../public/assets/img/cancion de hielo y fuego-juego de tronos.webp"
// ];


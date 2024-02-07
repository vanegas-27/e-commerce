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

    function read($consulta){

        $array = [];

        while($row = mysqli_fetch_array($consulta)){
            array_push($array, $row["id"]);
            array_push($array, $row["img"]);
            array_push($array, $row["producto"]);
            array_push($array, $row["precio"]);
        };

        return $array;
    }


};


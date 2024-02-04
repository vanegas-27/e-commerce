<?php

function destacados($result) : string{

    $nodos = "";

    while($row = mysqli_fetch_array($result)){

        $nodos .= "
        <img src='".$row["img"]."' alt='Libro destacado' class='img-fluid' id='".$row["id"]."' />
        \n
        ";

    }
    
    return $nodos;
}
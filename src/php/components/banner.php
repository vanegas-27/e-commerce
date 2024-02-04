<?php

function banners($result) : string {

    $nodos = "";
    $contador = 1;

    while($row = mysqli_fetch_array($result)){

        if($contador == 1){
            $nodos .= "
            <div class='carousel-item active' id='".$row["id"]."'>
                <img src='".$row["img"]."' class='d-block w-100 img-fluid' alt='...' />
            </div>\n
            ";
        }else{
            $nodos .= "
            <div class='carousel-item' id='".$row["id"]."'>
                <img src='".$row["img"]."' class='d-block w-100 img-fluid' alt='...' />
            </div>\n
            ";
        }

        $contador+=1;

    }
    
    return $nodos;
}
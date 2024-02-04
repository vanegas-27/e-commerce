<?php

function catalogo($result) : string {

    $nodos = "";

    while($row = mysqli_fetch_array($result)){

        $nodos .="
        <div class='card'>
            <img src='".$row["img"]."' alt='Foto libro catalogo' class='img-fluid' />
            <div class='card-body'>
                <h4 class='card-title'>".$row["categoria"]."</h4>
                <span class='star d-flex gap-2'>
                    &starf;&starf;&starf;&starf;&star;<i>$".$row["precio"]."</i>
                </span>
                <div class='botons'>
                    <button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#exampleModal' id='".$row["id"]."'>
                    Ver
                    </button>
                    <button class='btn btn-outline-primary'>
                    <i class='bi bi-cart-plus'></i>
                    </button>
                </div>
            </div>
        </div>\n
        ";

    };
    
    return $nodos;
}
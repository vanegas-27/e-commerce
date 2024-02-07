<?php

include "../bd.php";

$base = new Bd();


$carrito = $base -> query("SELECT * FROM carrito WHERE id = '{$_POST['id']}';"); 
$value = (mysqli_num_rows($carrito) > 0)?showCarrrito($base):ejecute($base);


function showCarrrito($base){

    $nodos = "";

    $rel = $base -> query("SELECT * FROM carrito");

    if(mysqli_num_rows( $rel ) < 1){
        return "<span class='cart-span'>No hay libros en el carrito.</span>";
    }

    while($row = mysqli_fetch_array($rel)){
        $nodos .= "
        <article class='d-flex aside-cars-content-cart'>
            <figure class='d-flex'>
                <img src='{$row["img"]}' alt='...' loading='lazy'>
                <figcaption>{$row["producto"]}</figcaption>
            </figure>
            <span>{$row["precio"]}$</span>
            <i class='bi bi-x cartX' data-tab='{$row["id"]}'></i>          
        </article>\n
        ";
    }

    
    
    return $nodos;

}



function addCarrito($base){
    
    $array = $base -> read($base -> query("SELECT * FROM catalogo WHERE id = '{$_POST['id']}';"));
    
    $base -> query("INSERT INTO carrito VALUES ('{$array[0]}','{$array[1]}','{$array[2]}','{$array[3]}');");
    
    return showCarrrito($base);
}

function removeCarrito($base){
    $suma = 20 + $_POST['id'];
    $base ->query("DELETE FROM carrito WHERE id = '{$suma}';");
    return showCarrrito($base);
};



function ejecute($base){

    $salida = "";

    if($_POST['id'] == 0){
        $salida = showCarrrito($base);
    }
    
    if($_POST['id'] >= 1){
        $salida = addCarrito($base);
    }
    
    if($_POST['id'] < 0){
        $salida = removeCarrito($base);
    }

   return $salida;

}



// $val = $_POST['query'] == 'crear'?addCarrito($base):removeCarrito($base);

echo $value;
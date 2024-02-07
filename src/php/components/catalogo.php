<?php
include "../bd.php";

$base = new Bd();

$dic = [
    'i' => '0,9',
    '1' => '0,9',
    '2' => '9,9',
    '3' => '18,9'
];

isset($_GET["colum"])?
$catalogo = $base->query("SELECT * FROM catalogo WHERE `{$_GET['colum']}` like '{$_GET['value']}%'"):
$catalogo = $base->query("SELECT * FROM catalogo LIMIT {$dic[$_GET['p']]}");


function catalogo($result): string
{

    $nodos = "";

    if(mysqli_num_rows($result) == 0){
        return "<h3>Lo sentimos, no se encontro ningun resultado. ❌</h3>";
    }

    while ($row = mysqli_fetch_array($result)) {

        $nodos .= "
        <div class='card'>
            <span>{$row['categoria']}</span>
            <img src='" . $row["img"] . "' alt='Foto libro catalogo' class='img-fluid' data-id='" . $row["id"] . "' />
            <div class='card-body'>
                <h4 class='card-title'>" . $row["producto"] . "</h4>
                <span class='star d-flex gap-2'>
                    &starf;&starf;&starf;&starf;&star;<i>$" . $row["precio"] . "</i>
                </span>
                <div class='botons'>
                    <button type='button' class='btn btn-outline-success btnCart' data-id='" . $row["id"] . "'>
                    Ver
                    </button>
                    <button class='btn btn-outline-success carrito' data-id='". $row["id"] ."'>
                    <i class='bi bi-cart-plus'></i>
                    </button>
                </div>
            </div>
        </div>\n
        ";
    };

    return $nodos;
}

echo catalogo($catalogo);

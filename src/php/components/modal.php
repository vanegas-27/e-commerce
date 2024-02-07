<?php

include "../bd.php";

$base = new Bd();

$catalogo = $base->query("SELECT * FROM catalogo WHERE id = '{$_GET['id']}'");

$modal = "";

while($row = mysqli_fetch_array($catalogo)){
    $modal = "
    <div class='cart-header d-flex justify-content-between'>
        <h3>
            {$row['producto']}
        </h3>
        <span>
            <i class='bi bi-x-lg'></i>
        </span>
    </div>
    <div class='cart-body'>
        <figure>
            <img src='{$row['img']}' class='rounded mx-auto d-block img-fluid' alt='amor a 4 estaciones'>
        </figure>
        <p>
        {$row['descripcion']}
        </p>
        <button type='button' class='btn btn-outline-success' id='liveToastBtn' data-id='" . $row["id"] . "'>Comprar</button>
    </div>
";
}

echo $modal;

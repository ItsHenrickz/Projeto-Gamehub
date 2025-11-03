<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="https://png.pngtree.com/png-clipart/20250426/original/pngtree-wolf-gaming-logo-red-and-black-with-white-background-png-image_20883912.png">
</head>

<?php

    include_once "topo.php";
    include_once "menu.php";

    // Área de conteúdo
    if(empty($_SERVER["QUERY_STRING"])){
        $var = "conteudo";
        include_once "$var.php";
    }else{
        $pg = $_GET['pg'];
        include "$pg.php";
    }

?>

<h2>Área admininstrativa.</h2>
<a href="admin/index.php">Acessar</a>

<?php
    include_once "rodape.php";
?>
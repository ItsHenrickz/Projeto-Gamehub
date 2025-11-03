<?php
echo "Painel administrativo";
?>
<head>
    <link rel="stylesheet" href="../estilos.css">
    <title>Admininstração</title>
    <link rel="icon" href="https://png.pngtree.com/png-clipart/20250426/original/pngtree-wolf-gaming-logo-red-and-black-with-white-background-png-image_20883912.png">
</head>
<body class="amarelo">
<nav>
    <a href="index.php">Inicio</a>
    <a href="?pg=clientes-admin">Clientes</a>
    <a href="?pg=games-admin">Games</a>
    <a href="../index.php">Página Principal</a>
    <hr style="border-color: #111;">
</nav>
<?php
// Conteúdo
if(empty($_SERVER["QUERY_STRING"])){
    $var = "principal";
    include_once "$var.php";
}elseif($_GET['pg']){
    $pg = $_GET['pg'];
    include_once "$pg.php";
}else{
    echo "Página não encontrada";
}
?>
</body>
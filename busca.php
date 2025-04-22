<?php
// if (!isset($_GET['nome_livro'])) {
// header('Location: index.php');
// exit;
// }

// $nome = "%".trim($_GET['nome_livro'])."%";

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'db_busca';

$mysqli = new mysqli($host, $user, $pass, $db);
function foi(){
    global $mysqli;
    $query = $mysqli->query('SELECT * from tb_livro');
    $resultado = $query->fetch_assoc();
    return $resultado;
}

var_export(foi());



<?php
// require_once './db.php';
if (!isset($_POST['nome_livro'])) {
    header('Location: index.php');
    exit;
}

$nome = "%" . trim($_POST['nome_livro']) . "%";

$host = 'localhost:3306';
$user = 'root';
$pass = '';
$db = 'db_busca';

$mysqli = new mysqli($host, $user, $pass, $db);
// function foi($nome){
//     global $mysqli;
//     $query = $mysqli->query("SELECT * FROM tb_livro WHERE nome_livro LIKE '$nome'");
//     $resultado = $query->fetch_assoc();
//     return $resultado;
// }

// var_export(foi( $nome));

//IMPORTANTE
//criando A SEGURANÇA de como a consulta com pesquisa sera feita 
function minha($nome){
global $mysqli;
$nome = "%$nome%";
$query = $mysqli->prepare("SELECT * from tb_livro where nome_livro like ?");
$query->bind_param("s", $nome);
$query->execute();

$result = $query->get_result();
$resultado = $result->fetch_assoc();
return $resultado;


}
var_export(minha($nome));

// function foi($dbh, $nome){
// $sth = $dbh->prepare("SELECT * FROM tb_livro WHERE nome_livro LIKE :nome");
// $sth->bindParam(':nome', $nome);
// $sth->execute();

//  return $sth->fetchAll();
// }

// var_dump(foi($dbh, $nome));
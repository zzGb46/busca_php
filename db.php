
<?php
 $user = 'root';
 $pass = '';
 $banco= 'db_busca';
$dbh = new PDO('mysql:host=localhost;dbname='. $banco, $user, $pass);

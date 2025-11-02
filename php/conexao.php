<!-- if($_SERVER('REQUIST_METHOD')){
    $EMAIN = [$_POST];
    echo $EMAIN;
} -->


<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'fabrica_conservas';

$conexao = mysqli_connect($server, $user, $pass, $db_name);

if (!$conexao)
    echo ('Falha aoconectar com banco de dados!');
else
    echo 'sucesso !';

?>
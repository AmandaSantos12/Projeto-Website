<?php

$host = "localhost";
$usuario_banco = "root";
$senha_banco= "";
$banco = "loja_bd";

$con =mysqli_connect($host, $usuario_banco, $senha_banco, $banco);
if (mysqli_connect_error($con)){
    echo "Falha ao conectar ao banco de dados: ".mysqli_connect_error();
}
?>
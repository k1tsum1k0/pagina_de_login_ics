<?php
session_start();

if(empty($_POST) or (empty($_POST['usuario']) or (empty($_POST["senha"])))){
    print"<script>location.href='falhaLogin.php';</script>";
}
include("conexao.php");


    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
$senhahash= hash("sha256", $senha);

$sql = "select * from usuario
        where usuario = '{$usuario}'
        and senha = '{$senhahash}'";

$res = $conn->query($sql) or die("". $conn->error);

$row = $res-> fetch_object();

$qtd = $res->num_rows;
if ($qtd > 0) {
    $_SESSION['usuario'] =$usuario;

    print"<script>location.href='sucessoLogin.php';</script>";
} else {
    print"<script>location.href='falhaLogin.php';</script>";
}






?>
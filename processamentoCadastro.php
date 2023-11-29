<?php
include("conexao.php");

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $senhahash=hash("sha256", $senha);

   $sql="INSERT INTO usuario(usuario,senha) 
        VALUES ('$usuario','$senhahash')";

    if (mysqli_query($conn,$sql)) {
        header('Location: sucessoCadastro.php');
    } else {
        header('Location: falhaCadastro.php');
    }

?>

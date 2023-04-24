<?php
$nome_usuario =$_POST['nome_usuario'];
$senha = sha1($senha = $_POST['senha']);

include_once 'conecta.php';

$sql = "INSERT INTO usuario VALUES (NULL, '$nome_usuario','$senha')";

if (mysqli_query($conexao_db, $sql)){
    $msg = "Cadastrado com sucesso!";
}else{        
    $msg = "Erro ao Cadastrar";
}

mysqli_close($conexao_db);
echo "<script>alert ('".$msg."'); location.href='telaAdm.php';</script>"
?>
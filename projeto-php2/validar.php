<?php
INCLUDE 'conecta.php';
session_start();

$login = $_POST["login"];
$senha = $_POST["senha"];
$senha = sha1($senha);
$sql_usuario = "SELECT * FROM usuario WHERE nome_usuario = '$login' AND senha = '$senha' ";
$sql_admin = "SELECT * FROM admin WHERE login = '$login' AND senha = '$senha' ";
$result_usuario = mysqli_query($conexao_db, $sql_usuario);
$result_admin = mysqli_query($conexao_db, $sql_admin);

if(mysqli_num_rows($result_usuario) == 1){
    $row = mysqli_fetch_array($result_usuario);
    $_SESSION["nome_usuario"] = $row ["nome_usuario"];    
    header('Location: tela_usuario.php');

}
if(mysqli_num_rows($result_admin) == 1){
    $row = mysqli_fetch_array($result_admin);
    $_SESSION["login"] = $row["login"];
    $_SESSION["id_admin"] = $row["id_admin"];
    header('Location: telaAdm.php');
}
 
else{
    
    echo "<script>alert('Login ou senha inválidos!'); location.href='index.html';</script>";

}
?>
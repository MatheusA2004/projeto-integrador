<?php
$funcionario = $_POST['funcionario'];
$maquina = $_POST['maquina'];
$sala = $_POST['sala'];
$urgencia = $_POST['urgencia'];
$problema = $_POST['problema'];

include_once 'conecta.php';

$sql = "INSERT INTO chamados VALUES (NULL,'$funcionario','$maquina','$sala','$urgencia','$problema')";


if(empty($funcionario)){
    $msg = "o campo de Matricula deve ser preenchido !";
} else if(empty($maquina)){
    $msg = "o campo de Maquina deve ser preenchido !";
} else if(empty($sala)){
    $msg = "o campo de sala deve ser preenchido !";
} else if(empty($urgencia)){
    $msg = "o campo de urgencia deve ser preenchido !";
} else if(empty($problema)){
    $msg = "o campo de problema deve ser preenchido !";
} else{
    if (mysqli_query($conexao_db, $sql)){
    $msg = "Chamado aberto com sucesso!";
}
}



mysqli_close($conexao_db);
echo "<script>alert ('".$msg."'); location.href='tela_usuario.php';</script>"
?>
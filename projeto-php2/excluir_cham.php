<?php
$id_chamado = $_GET['id_chamado'];

// Executa a conexao com o mysql e selecionar a base
include_once 'conecta.php';


//montar a query sql de gravação recebendo as variaveis via post
$sql = "DELETE FROM chamados WHERE id_chamado=".$id_chamado;

//Faz a conexao e executa a instrucao carregada na varivael $sql e os envia para o banco mysql.

try {
    if (mysqli_query($conexao_db, $sql)){
        // Caso a conexao esteja correta cria o retorno do cadastro
        $msg = "Resolvido com sucesso!";
        echo "<script>alert ('".$msg."'); location.href='telaAdm.php';</script>";
    }
} catch (Exception $e) {
    echo 'O erro ocorreu porque:: ', $e->getMessage(), "\n";

    echo '<br/><h1><a href=telaAdm.php>Voltar para Corrigir</a></h1>';
}

// Encerra a conexão com o banco
mysqli_close($conexao_db);
// Cria um alert javascript carrega o conteúdo da variável $msg e redireciona para o index

        

?>
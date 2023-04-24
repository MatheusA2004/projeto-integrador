<?php session_start();
 if(!$_SESSION['login']){
 }
 

include "conecta.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style4.css">
    <title>Adm page</title>
</head>
<body>

         <header class="header">
            <img src="imagens/user.png" alt="">
            <h1><?= "Bem Vindo  " .$_SESSION['login']. " <br/>"; ?></h1>

            <div>
            <a href ="logout.php"><button>Sair</button></a>
            </div>
        </header>
    
    
    <div class="logo">
        <img src="imagens/MM.png" alt="" class="img-logo">
    </div>
    <p>

    <div class="box">
        <form action="cad_usuario.php" method="post">
            Login
            <br>
            <input name="nome_usuario" required class="caixa"><br/>
            Senha
            <br>
            <input name="senha" required class="caixa"></br>
            <input type="submit" value="cadastrar" class="btn">
        </form>
    </div>    
</body>
</html>
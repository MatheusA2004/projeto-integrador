<?php
   session_start();
   include "conecta.php";
   if(!$_SESSION['nome_usuario']){
      header("location: login.php");
   }
   $nome_usuario = $_SESSION['nome_usuario'];
   $query = "SELECT * FROM usuario WHERE nome_usuario = '$nome_usuario'";
   $result = mysqli_query($conexao_db, $query);
   $row = mysqli_fetch_assoc($result);
   $login_usuario = $row['id_usuario'];
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="style2.css">
</head>
<body>

      <header class="header">
         <img src="imagens/user.png" alt="">
         <h1><?= "Bem Vindo  " .$_SESSION['nome_usuario']. " <br/>"; ?></h1>

         <div>
         <a href ="logout.php"><button>Sair</button></a>
         </div>
      </header>
    
   <div class="tudao">
      <div class="quadro">
         <form action="chamados.php" method="post">

            <div class="linha1">
               <div>
                  <h2>Matrícula:</h2>
                  <input type="text" name="funcionario" class="caixa" value="<?php echo $login_usuario; ?>">  
               </div>
               <div>
                  <h2>Número da máquina:</h2>
                  <input type="text" name="maquina" class="caixa" require>  
               </div>
            </div>   

            <div class="linha2">
               <div>
                  <h2>Número da sala:</h2>
                  <input type="text" name="sala" class="caixa" require>
               </div>
               <div>
                  <h2>Urgência:</h2>
                  <input list="browsers" name="urgencia" id="browser" class="caixa" autocomplete="off" placeholder="Nível de urgência" require>
                  <datalist id="browsers">
                     <option value="alto"></option>
                     <option value="medio"></option>
                     <option value="baixo"></option>
                  </datalist> 
               </div>
            </div>   

            <div class="linha3">
               <div>
                  <h2>Informe o problema:</h2>
                  <input type="text" name="problema" class="caixa2" require>
               </div>
            </div>   

            <button type="submit" class="btn">Abrir chamado</button>
         </form>
      </div>
   </div>

   <scirpt src="teste.js"></script>

</body>
</html>
<?php
    include "servicos/servicoMensagemSessao.php";
    include "servicos/conexao.php";
?>

<!DOCTYPE html>
<html>
<head>

        <meta charset="UTF-8">
        <title>FORMULARIO DE INSCRIÇÃO</title>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta name="viewport" content="width-device-widht, initial-scale=1"> 
</head>

<body>



<nav class="menu">
         <ul class="navbar">
             <li><a href ="./players.php">Players</a></li>
            </ul>
     </nav>
     </br>

     

        <h2> Ficha cadastral de Jogadores</h2>

    <form action="script.php" method="POST">

<?php
        $mensagemDeErro = obterMensagemErro();
        if (!empty($mensagemDeErro))
        {echo $mensagemDeErro;}

        $mensagemDeSucesso = obterMensagemSucesso();
        if (!empty($mensagemDeSucesso))
        {echo $mensagemDeSucesso;}
?>
        <p>Seu nome: <input type="text" name="nome"/> </p>
        <p>Sua idade: <input type="text" name="idade"/> </p>
        <p><input type="submit" value="Enviar"/> </p>

    </form>

    



</body>

</html>
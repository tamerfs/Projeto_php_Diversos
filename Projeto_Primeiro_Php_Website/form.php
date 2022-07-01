<?php

header ("Location: index.html");


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$url = $_POST['URL'];


echo 'Dados recebidos do formulário!!!<br/><br/>';
echo 'Você digitou:<br/>';
echo 'Nome: ' .$nome.'<br />';
echo 'Senha: ' .$senha.'<br />';
echo 'E-mail: ' .$email.'<br />';
echo 'URL: '.$url.'<br />';
?>

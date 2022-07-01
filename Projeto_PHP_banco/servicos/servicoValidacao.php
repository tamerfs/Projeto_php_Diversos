<?php


// segurança e boas praticas para inserção de dados.

function validaNome(string $nome) : bool
{
    if(empty($nome)){
        setarMensagemErro("o nome não pode ser vazio, favor inserir os dados");
        return false;
    }
    else if(strlen($nome) <3){
        setarMensagemErro("o nome deve conter mais de 3 caracteres, favor inserir os dados");
        return false;
    }
    else if(strlen($nome) >20){
        setarMensagemErro("o nome não pode ter mais de 20 caracteres, favor inserir os dados");
        return false;
    }
return true;
}

function validaIdade(string $idade) : bool
{
    if(empty($idade)){
        setarMensagemErro("a idade não pode ser vazia, favor inserir os dados");
        return false;
    }
    else if(!is_numeric($idade)){
        setarMensagemErro("insira um numero para a idade");
        return false;
    }
return true;
}


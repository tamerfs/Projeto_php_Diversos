<?php

// logica que calculará as categorias e os competidores pela idade

function defineCategoriaCompetidor (string $nome, string $idade) : ?string
{

//$categorias = ['infantil', 'adolecente','adulto','idoso'];

    if(validaNome($nome) && validaIdade($idade)){

        removerMensagemErro();

    switch ($idade){
        case ($idade >= 6 && $idade <= 12) :
            setarMensagemSucesso("O nadador ".$nome. " compete na categoria Infantil");
            return null;  
        case ($idade >= 13 && $idade <= 18):
            setarMensagemSucesso("O nadador ".$nome." compete na categoria Adolecente");
            return null; 
        case ($idade >= 19 && $idade <= 65):
            setarMensagemSucesso('O nadador '.$nome. " compete na categoria Adulto");
            return null; 
        default: 
            setarMensagemSucesso('O nadador '.$nome." compete na categoria Idoso");
            return null; 
        }
    }
    else 
    {
        removerMensagemSucesso();   
        return obterMensagemErro();
    }
}

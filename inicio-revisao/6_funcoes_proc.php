<?php 

//Função Simples com retorno 

function somar(float $a, float $b): float{
    return $a+ $b;
}

//Exibindo resultado

echo somar (4,8);
echo "\n";

//Procedimento (Função sem retorno)
function saudacao($nome = "aluno"){
    echo "Olá,$nome! Bem-vindo (a)ao PHP. \n"
}

//Exibindo a saudação 
saudacao();
saudacao("Maria");
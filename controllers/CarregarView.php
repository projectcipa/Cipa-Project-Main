<?php


function carregarView($view) {
    switch ($view) {

        case 'PaginaInicial':
            require "views/PaginaInicial.php";
            break;

        case 'CadastroFuncionario':
            require "views/cadastroFuncionarios.php";
            break;

        case 'ListaFuncionarios': // Novo case para a lista
            require "views/listarFuncionarios.php";
            break;    

        case 'cadastroFuncionario':
            require "views/cadastroFuncionarios.php";
            break;

        case 'FuncionarioCriado':
            require "views/funcionarioCriado.php";
            break;    


          default:
            require "views/PaginaInicial.php";
            break;

    }
}

?>
<?php

function carregarView($view) {
    switch ($view) {

        case 'PaginaInicial':
            require "views/PaginaInicial.php";
            break;

        case 'CadastroFuncionario':
            require "views/CadastroFuncionarios.php";
            break;

        default:
            require "views/PaginaInicial.php";
            break;

    }
}

?>
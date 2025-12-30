<?php
    session_start();

    // Limpa todas as variáveis de sessão
    $_SESSION = [];

    // Destroi a sessão
    session_destroy();

    // Redireciona para a página de login
    header("Location: ../index.php");
    exit;
?>
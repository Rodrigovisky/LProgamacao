<?php
    // Inicia a sessão para ter acesso às variáveis atuais
    session_start();

    // Limpa todas as variáveis de sessão salvas (como $_SESSION['acesso'] e $_SESSION['nome'])
    $_SESSION = array();

    // Destrói completamente a sessão do servidor
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy();

    // Redireciona o usuário de volta para a tela de login
    header("Location: index.php");
    exit;
?>
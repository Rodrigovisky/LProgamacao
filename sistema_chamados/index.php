<?php
session_start();

// Se o usuário já estiver logado, joga ele direto para a página principal
if (isset($_SESSION['acesso']) && $_SESSION['acesso'] == true) {
    header('Location: principal.php');
    exit;
}

$erro_login = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    require_once('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    try {
        // Busca o usuário pelo e-mail
        $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        $usuario = $stmt->fetch();
        
        // Verifica se o usuário existe e se a senha criptografada bate
        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['acesso'] = true;
            header('Location: principal.php');
            exit; // Interrompe a execução para garantir o redirecionamento
        } else {
            $erro_login = "Credenciais Inválidas!";
        }
    } catch(Exception $e) {
        $erro_login = "Erro: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelpDesk - Controle de Chamados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h3 class="text-center mb-4">HelpDesk Suporte</h3>

        <form method="post">
            <div class="mb-3">
                <label class="form-label">E-mail Corporativo</label>
                <input name="email" type="email" class="form-control" placeholder="usuario@empresa.com" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input name="senha" type="password" class="form-control" placeholder="Digite sua senha" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Acessar Painel</button>
            
            <?php if (!empty($erro_login)): ?>
                <p class='text-danger mt-3 mb-0 text-center'><?= $erro_login ?></p>
            <?php endif; ?>

            <div class="text-center mt-3">
                <a href="cadastro.php">Criar conta de operador</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
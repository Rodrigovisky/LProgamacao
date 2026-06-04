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
            <?php
                session_start();
                if ($_SERVER['REQUEST_METHOD'] == "POST")
                {
                    require_once('conexao.php');
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    try
                    {
                        $stmt = $conexao->prepare("SELECT * FROM usuario WHERE email = ?");
                        $stmt->execute([$email]);
                        $usuario = $stmt->fetch();
                        $senha_correta = password_verify($senha,$usuario['senha']);
                        if ($usuario && $senha_correta)
                            {
                                $_SESSION['nome'] = $usuario['nome'];
                                $_SESSION['acesso'] = true;
                                header('Location: principal.php');
                            }
                        else{
                            echo "<p class='text-danger mt-3 mb-0 text-center'>Credenciais Inválidas!</p>";
                        }
                    } catch(Exception $e){
                        echo "<p class='text-danger mt-3 mb-0 text-center'>Erro: ".$e->getMessage()."</p>";
                    }
                }
            ?>
            <div class="text-center mt-3">
                <a href="cadastro.php">Criar conta de operador</a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
<?php
    require_once('../cabecalho.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('../conexao.php');
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        try {
            $stmt = $conexao->prepare('INSERT INTO Tecnicos (nome, especialidade, email, telefone) VALUES (?, ?, ?, ?);');
            if ($stmt->execute([$nome, $especialidade, $email, $telefone])) {
                $mensagem = "<div class='alert alert-success mt-3'>Técnico cadastrado com sucesso!</div>";
            } else {
                $mensagem = "<div class='alert alert-danger mt-3'>Erro ao cadastrar técnico!</div>";
            }
        } catch(Exception $e) {
            $mensagem = "<div class='alert alert-danger mt-3'>Erro: " . $e->getMessage() . "</div>";
        }
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white py-3 rounded-top-4">
                    <h5 class="mb-0 px-2">| Novo Técnico</h5>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Especialidade (ex: Redes, Hardware, Sistemas)</label>
                            <input type="text" name="especialidade" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" required>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="crud_tecnicos.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                    <?= $mensagem ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../rodape.php'); ?>
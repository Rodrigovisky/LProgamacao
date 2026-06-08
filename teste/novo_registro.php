<?php
    require_once('../cabecalho.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once('../conexao.php');
        $descricao = $_POST['descricao'];
        $prioridade = $_POST['prioridade'];

        try {
            $stmt = $conexao->prepare('INSERT INTO TiposChamados (descricao, prioridade) VALUES (?, ?);');
            if ($stmt->execute([$descricao, $prioridade])) {
                $mensagem = "<div class='alert alert-success mt-3'>Tipo de chamado cadastrado!</div>";
            } else {
                $mensagem = "<div class='alert alert-danger mt-3'>Erro ao cadastrar!</div>";
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
                    <h5 class="mb-0 px-2">| Novo Tipo de Chamado</h5>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Descrição do Tipo (ex: Instalação de Software, Queda de Internet)</label>
                            <input type="text" name="descricao" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Prioridade Padrão</label>
                            <select name="prioridade" class="form-select" required>
                                <option value="Baixa">Baixa</option>
                                <option value="Média">Média</option>
                                <option value="Alta">Alta</option>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="crud_tipos.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                    <?= $mensagem ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once('../rodape.php'); ?>
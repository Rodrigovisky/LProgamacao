<?php
    require_once('../cabecalho.php');
    require_once('../conexao.php');
    $mensagem = "";

    // Carrega dados para os selects do formulário
    try {
        $clientes = $conexao->query("SELECT id, nome FROM Clientes")->fetchAll();
        $tecnicos = $conexao->query("SELECT id, nome FROM Tecnicos")->fetchAll();
        $tipos = $conexao->query("SELECT id, descricao FROM TiposChamados")->fetchAll();
    } catch(Exception $e) {
        echo "Erro ao carregar dados: " . $e->getMessage();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $descricao_problema = $_POST['descricao_problema'];
        $data_atendimento = $_POST['data_atendimento'];
        $status = $_POST['status'];
        $clientes_id = $_POST['clientes_id'];
        $tecnicos_id = $_POST['tecnicos_id'];
        $tipos_id = $_POST['tipos_id'];

        try {
            $sql = "INSERT INTO Atendimentos (descricao_problema, data_atendimento, status, Clientes_id, Tecnicos_id, TiposChamados_id) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conexao->prepare($sql);
            if ($stmt->execute([$descricao_problema, $data_atendimento, $status, $clientes_id, $tecnicos_id, $tipos_id])) {
                $mensagem = "<p class='text-success'>Atendimento registrado com sucesso!</p>";
            } else {
                $mensagem = "<p class='text-danger'>Erro ao registrar atendimento!</p>";
            }
        } catch(Exception $e) {
            $mensagem = "<p class='text-danger'>Erro: " . $e->getMessage() . "</p>";
        }
    }
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white py-3">
                    <h5 class="mb-0 px-2">| Novo Atendimento</h5>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Cliente</label>
                                <select name="clientes_id" class="form-select" required>
                                    <option value="">Selecione o Cliente</option>
                                    <?php foreach($clientes as $c): ?>
                                        <option value="<?= $c['id'] ?>"><?= $c['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Técnico Responsável</label>
                                <select name="tecnicos_id" class="form-select" required>
                                    <option value="">Selecione o Técnico</option>
                                    <?php foreach($tecnicos as $t): ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nome'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Tipo de Chamado</label>
                                <select name="tipos_id" class="form-select" required>
                                    <option value="">Selecione o Tipo</option>
                                    <?php foreach($tipos as $tp): ?>
                                        <option value="<?= $tp['id'] ?>"><?= $tp['descricao'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Data do Atendimento</label>
                                <input type="date" name="data_atendimento" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select" required>
                                <option value="Aberto">Aberto</option>
                                <option value="Em Andamento">Em Andamento</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Descrição do Problema</label>
                            <textarea name="descricao_problema" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <a href="crud_atendimentos.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $mensagem; require_once('../rodape.php'); ?>
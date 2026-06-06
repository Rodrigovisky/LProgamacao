<?php
    require_once('../cabecalho.php');
    require_once('../conexao.php');
    $mensagem = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $descricao = $_POST['descricao'];
        $prioridade = $_POST['prioridade'];
        $id = $_GET['id'];
        try{
            $sql = "UPDATE TiposChamados SET descricao = ?, prioridade = ? WHERE id = ?";
            $stmt = $conexao->prepare($sql);
            if ($stmt->execute([$descricao, $prioridade, $id])) {
                $mensagem = "<p class='text-success mt-3'>Alteração Realizada!</p>";
            } else {
                $mensagem = "<p class='text-danger mt-3'>Erro ao Alterar! Tente novamente</p>";
            }
        } catch(Exception $e){
            echo "Erro: " . $e->getMessage();
        }
    }

    try{
        $stmt = $conexao->prepare("SELECT * FROM TiposChamados WHERE id = ?");
        $stmt->execute([$_GET['id']]);
        $resultado = $stmt->fetch();
    } catch(Exception $e){
        echo "Erro: " . $e->getMessage();
    }
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white py-3 rounded-top-4">
                    <h5 class="mb-0 px-2">| Alterar Tipo de Chamado</h5>
                </div>
                <div class="card-body p-4">
                    <form method="post">
                        <div class="mb-3">
                            <label class="form-label">Descrição do Tipo</label>
                            <input value="<?= $resultado['descricao'] ?>" type="text" name="descricao" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Prioridade Padrão</label>
                            <select name="prioridade" class="form-select" required>
                                <option value="Baixa" <?= $resultado['prioridade'] == 'Baixa' ? 'selected' : '' ?>>Baixa</option>
                                <option value="Média" <?= $resultado['prioridade'] == 'Média' ? 'selected' : '' ?>>Média</option>
                                <option value="Alta"  <?= $resultado['prioridade'] == 'Alta'  ? 'selected' : '' ?>>Alta</option>
                            </select>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                            <a href="crud_tipos.php" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $mensagem; require_once('../rodape.php'); ?>
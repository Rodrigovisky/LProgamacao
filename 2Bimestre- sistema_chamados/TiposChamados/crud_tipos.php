<?php
    require_once('../cabecalho.php');
    require_once('../conexao.php');
    try {
        $stmt = $conexao->query('SELECT * FROM TiposChamados');
        $resultado = $stmt->fetchAll();
    } catch(Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
?>

<h2>Tipos de Chamados</h2>
<a href="novo_tipo.php" class="btn btn-success mb-3">Novo Registro</a>
<a href="../principal.php" class="btn btn-secondary mb-3 me-2">Voltar</a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Descrição do Tipo</th>
            <th>Prioridade Padrão</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $r): ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['descricao'] ?></td>
                <td>
                    <span class="badge bg-<?= $r['prioridade'] == 'Alta' ? 'danger' : ($r['prioridade'] == 'Média' ? 'warning' : 'secondary') ?>">
                        <?= $r['prioridade'] ?>
                    </span>
                </td>
                <td class="d-flex gap-2">
                    <a href="alterar_tipo.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="consultar_tipo.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
                </td>  
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('../rodape.php'); ?>
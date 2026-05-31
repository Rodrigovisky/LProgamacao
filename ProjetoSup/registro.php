<?php
    require_once('../cabecalho.php');
    require_once('../conexao.php');
    try {
        $sql = "SELECT a.id, a.data_atendimento, a.status, c.nome AS cliente, t.nome AS tecnico, tc.descricao AS tipo 
                FROM Atendimentos a
                INNER JOIN Clientes c ON a.Clientes_id = c.id
                INNER JOIN Tecnicos t ON a.Tecnicos_id = t.id
                INNER JOIN TiposChamados tc ON a.TiposChamados_id = tc.id";
        $stmt = $conexao->query($sql);
        $resultado = $stmt->fetchAll();
    } catch(Exception $e) {
        echo "Erro: " . $e->getMessage();
    }
?>

<h2>Registro de Atendimentos (Chamados)</h2>
<a href="novo_atendimento.php" class="btn btn-success mb-3">Registrar Atendimento</a>
<a href="../principal.php" class="btn btn-secondary mb-3 me-2">Voltar</a>

<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Cliente</th>
            <th>Técnico</th>
            <th>Tipo de Chamado</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultado as $r): ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= date('d/m/Y', strtotime($r['data_atendimento'])) ?></td>
                <td><?= $r['cliente'] ?></td>
                <td><?= $r['tecnico'] ?></td>
                <td><?= $r['tipo'] ?></td>
                <td><span class="badge bg-<?= $r['status'] == 'Aberto' ? 'warning' : 'success' ?>"><?= $r['status'] ?></span></td>
                <td class="d-flex gap-2">
                    <a href="alterar_atendimento.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
                    <a href="consultar_atendimento.php?id=<?= $r['id'] ?>" class="btn btn-sm btn-info">Consultar</a>
                </td>  
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once('../rodape.php'); ?>
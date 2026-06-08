<?php
  require_once('cabecalho.php');
?>

<div class="container mt-5">
    <div class="row mb-4">
        <div class="col">
            <h2 style="font-family: 'Syne', sans-serif; font-weight: 700;">Olá, Técnico <?= $_SESSION['nome']?>!</h2>
            <p class="text-muted">Bem-vindo ao painel de gerenciamento do HelpDesk. Escolha uma ação rápida abaixo:</p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3">
                <div class="card-body">
                    <h5 class="card-title text-uppercase font-syne mb-3" style="color: var(--cinza-dark);">Clientes</h5>
                    <p class="card-text text-muted small">Gerencie a base de empresas e usuários solicitantes do suporte.</p>
                    <a href="Clientes/crud_clientes.php" class="btn btn-primary w-100 mt-2">Acessar Clientes</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3">
                <div class="card-body">
                    <h5 class="card-title text-uppercase font-syne mb-3" style="color: var(--cinza-dark);">Técnicos</h5>
                    <p class="card-text text-muted small">Configure a equipe de especialistas e suas respectivas áreas.</p>
                    <a href="Tecnicos/crud_tecnicos.php" class="btn btn-primary w-100 mt-2">Acessar Técnicos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-3">
                <div class="card-body">
                    <h5 class="card-title text-uppercase font-syne mb-3" style="color: var(--cinza-dark);">Tipos de Chamados</h5>
                    <p class="card-text text-muted small">Defina as categorias de problemas e prioridades padrão de atendimento.</p>
                    <a href="TiposChamados/crud_tipos.php" class="btn btn-primary w-100 mt-2">Acessar Categorias</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  require_once('rodape.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 4 - Novo Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
</head>
<body>

<div class="form-container">
    <h2>Novo Usuário</h2>
    <hr class="mb-4">

    <form class="row g-3">
        <div class="col-12">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Informe o nome...">
        </div>

        <div class="col-md-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" placeholder="Informe o cpf...">
        </div>
        
        <div class="col-md-7">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" class="form-control" id="endereco" placeholder="Informe o endereço...">
        </div>

        <div class="col-md-2">
            <label for="nivel" class="form-label">Nível:</label>
            <select id="nivel" class="form-select">
                <option selected>---</option>
                <option value="1">Administrador</option>
                <option value="2">Usuário</option>
            </select>
        </div>

        <div class="col-md-7">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Informe o email...">
        </div>

        <div class="col-md-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="senha" placeholder="Informe a senha...">
        </div>

        <div class="col-md-2">
            <label for="status" class="form-label">Status:</label>
            <select id="status" class="form-select">
                <option selected>---</option>
                <option value="ativo">Ativo</option>
                <option value="inativo">Inativo</option>
            </select>
        </div>

        <div class="col-12 d-flex justify-content-end gap-2 mt-4">
            <button type="submit" class="btn btn-enviar">Enviar</button>
            <button type="button" class="btn btn-outline-secondary">Cancelar</button>
        </div>
    </form>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

  <h5 class="mb-3">Formulário 2</h5>

  <div class="card p-3 shadow-sm">
    <form>

    
      <div class="row mb-3">
        <div class="col-md-1">
          <label class="form-label">Código</label>
          <input type="text" class="form-control" value="32">
        </div>

        <div class="col-md-5">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Nome Completo do Cliente">
        </div>

        <div class="col-md-4">
          <label class="form-label">E-mail</label>
          <input type="email" class="form-control" placeholder="cliente@dominio.com">
        </div>

        <div class="col-md-2">
          <label class="form-label">CPF</label>
          <input type="text" class="form-control" placeholder="Só números">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-3">
          <label class="form-label">Nº Celular</label>
          <input type="text" class="form-control" placeholder="Nº do celular">
        </div>

        <div class="col-md-3">
          <label class="form-label">Nº Telefone fixo</label>
          <input type="text" class="form-control" placeholder="Nº telefone">
        </div>

        <div class="col-md-2">
          <label class="form-label">CEP</label>
          <input type="text" class="form-control" placeholder="ex: 88308070">
        </div>

        <div class="col-md-3">
          <label class="form-label">Logradouro</label>
          <input type="text" class="form-control" placeholder="ex: Rua 1400">
        </div>

        <div class="col-md-1">
          <label class="form-label">Nº</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-4">
          <label class="form-label">Bairro</label>
          <input type="text" class="form-control" placeholder="Bairro">
        </div>

        <div class="col-md-4">
          <label class="form-label">Cidade</label>
          <input type="text" class="form-control" placeholder="Cidade">
        </div>

        <div class="col-md-1">
          <label class="form-label">UF</label>
          <input type="text" class="form-control" placeholder="UF">
        </div>

        <div class="col-md-3">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option selected>Selecione</option>
            <option>Ativo</option>
            <option>Inativo</option>
          </select>
        </div>
      </div>

      <div class="d-flex justify-content-end gap-2">
        <button type="reset" class="btn btn-danger">Resetar</button>
        <button type="submit" class="btn btn-success">Próximo</button>
      </div>

    </form>
  </div>

</div>
</body>
</html>
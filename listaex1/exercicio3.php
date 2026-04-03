<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
<div class="container mt-4">

  <div class="d-flex justify-content-between align-items-center mb-3">
    <h5>Formulário 3</h5>
    <h4 class="fw-bold">Sample Form</h4>
  </div>

  <div class="card p-4 shadow-sm">
    <form>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Partner Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Partner Email ID</label>
          <input type="email" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Partner Legal Name</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Partner Mobile</label>
          <input type="text" class="form-control">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Partner Address</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Contract Start Date</label>
          <input type="date" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Contract Expiry Date</label>
          <input type="date" class="form-control">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label class="form-label">Minimum Loan Amount</label>
          <input type="number" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Maximum Loan Amount</label>
          <input type="number" class="form-control">
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-6">
          <label class="form-label">Interest Rate</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">Deposit Amount</label>
          <input type="number" class="form-control">
        </div>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4">Save</button>
      </div>

    </form>
  </div>

</div>
</body>
</html>
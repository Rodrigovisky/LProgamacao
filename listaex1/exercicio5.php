<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>

<div class="container form-container">
    <h4>Billing address</h4>
    
    <form class="row g-3">
        <div class="col-sm-6">
            <label for="firstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstName" required>
        </div>

        <div class="col-sm-6">
            <label for="lastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastName" required>
        </div>

        <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
            </div>
        </div>

        <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com">
        </div>

        <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
        </div>

        <div class="col-12">
            <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
        </div>

        <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select" id="country" required>
                <option value="">Choose...</option>
                <option>United States</option>
                <option>Brazil</option>
            </select>
        </div>

        <div class="col-md-4">
            <label for="state" class="form-label">State</label>
            <select class="form-select" id="state" required>
                <option value="">Choose...</option>
                <option>California</option>
                <option>São Paulo</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required>
        </div>
    </form>
</div>

</body>
</html>
<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício4</h1>
<form method="post">
            <?php
            for($i=0; $i<5; $i++)
            echo '<div class="mb-3">
                <label>Código:</label>
                <input type="text" name="codigo[]" class="form-control" required="">

                <label>Nome:</label>
                <input type="text" name="nome[]" class="form-control" required="">

                <label>Preço:</label>
                <input type="number" step="0.01" name="preco[]" class="form-control" required="">
            </div>';
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $codigos = $_POST['codigo'];
    $nomes = $_POST['nome'];
    $precos = $_POST['preco'];

    $produtos = [];

    for($i = 0; $i < count($codigos); $i++)
    {
        $preco = $precos[$i];

        
        if($preco > 100)
        {
            $preco = $preco * 0.15;
        }
 
        $produtos[$codigos[$i]] = [
            "nome" => $nomes[$i],
            "preco" => $preco
        ];
    }

    
    uasort($produtos, function($a, $b){
        return strcmp($a["nome"], $b["nome"]);
    });

    echo "<p><strong>Lista de produtos:</strong></p>";

    foreach($produtos as $codigo => $dados)
    {
        echo "<p>Código: $codigo | Nome: ".$dados["nome"]." | Preço: R$ ".$dados["preco"]."</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
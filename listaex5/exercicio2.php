<!doctype html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício2</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body> 
<div class="container py-3">
<h1>Exercício2</h1>
<form method="post">
            <?php
            for($i=0; $i<5; $i++)
            echo '<div class="mb-3">
                <label>Nome:</label>
                <input type="text" name="nome[]" class="form-control" required="">
                <label>Nota 1:</label>
                <input type="number" name="n1[]" class="form-control" required="">
                <label>Nota 2:</label>
                <input type="number" name="n2[]" class="form-control" required="">
                <label>Nota 3:</label>
                <input type="number" name="n3[]" class="form-control" required="">
            </div>';
?>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $nomes = $_POST['nome'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $alunos = [];

    for($i = 0; $i < count($nomes); $i++)
    {
        $media = ($n1[$i] + $n2[$i] + $n3[$i]) / 3;

        $alunos[$nomes[$i]] = $media;
    }

    arsort($alunos);

    echo "<p><strong>Lista de alunos:</strong></p>";

    foreach($alunos as $nome => $media)
    {
        echo "<p>$nome : $media</p>";
    }
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</div>
</body>
</html>
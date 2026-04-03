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
    <form method="POST">
        <?php for($i = 1; $i <= 5; $i++): ?>
            <div>
                <strong>Livro <?php echo $i; ?>:</strong><br>
                Título: <input type="text" name="titulos[]" required>
                Quantidade: <input type="number" name="quantidades[]" min="0" required>
            </div>
        <?php endfor; ?>
        <button type="submit" name="enviar">Processar Estoque</button>
    </form>

    <hr>

    <?php
    if (isset($_POST['enviar'])) {
        $titulos = $_POST['titulos'];
        $quantidades = $_POST['quantidades'];
        $estoque = [];

        for ($i = 0; $i < 5; $i++) {
            $titulo = trim($titulos[$i]);
            $qtd = (int)$quantidades[$i];
            $estoque[$titulo] = $qtd;
        }

        ksort($estoque);

        echo "<h3>Relatório de Estoque Ordenado:</h3>";
        
        foreach ($estoque as $livro => $quantidade) {
            echo "<div class='livro-item'>";
            echo "<strong>Título:</strong> $livro | <strong>Qtd:</strong> $quantidade";
            
            
            if ($quantidade < 5) {
                echo " <span class='alerta'>- Estoque Baixo!</span>";
            } else {
                echo " <span class='sucesso'>- OK</span>";
            }
            echo "</div>";
        }
    }
    ?>

</body>
</html>
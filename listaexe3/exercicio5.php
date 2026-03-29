<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-3">
        <h1>Exercicio5<h1>
        <form method="post">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o valor</label>
                <input type="number" id="n1" name="n1" class="form-control" required="">
               
           
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $n1 = $_POST['valor1'];
                $mes = "";
                switch ($n1) {
                        case 1:  $mes = "Janeiro";   break;
                        case 2:  $mes = "Fevereiro"; break;
                        case 3:  $mes = "Março";     break;
                        case 4:  $mes = "Abril";     break;
                        case 5:  $mes = "Maio";      break;
                        case 6:  $mes = "Junho";     break;
                        case 7:  $mes = "Julho";     break;
                        case 8:  $mes = "Agosto";    break;
                        case 9:  $mes = "Setembro";  break;
                        case 10: $mes = "Outubro";   break;
                        case 11: $mes = "Novembro";  break;
                        case 12: $mes = "Dezembro";  break;
                        break;
                    }
                    echo "O mês é: $mes";
                }
                
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
            $real = $_GET["numero"];
            $dolar = 5.70;
            $conv = $real/$dolar;
            echo "Você tem R\$". number_format($real, 2, ",", ".") . "<br> Convertido em dolar é US\$". number_format($conv, 2, ",", ".");

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
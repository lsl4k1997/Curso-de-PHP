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
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php 
            $min = 1;
            $max = 100;
            $gera = mt_rand($min, $max);
            echo "Gerando um número aleatório entre 1 é 100...<br>";
            echo "O número gerado foi <strong>$gera</strong>!";
        ?>
        <br>
        <form method="POST" action="res.php" >
            <input style="background-color: blue" type=submit value="Gerar Outro">
        </form>
    </main>
</body>
</html>
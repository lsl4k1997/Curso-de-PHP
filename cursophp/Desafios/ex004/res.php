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
            $numero = $_REQUEST["numero"];
            $ante = $numero - 1;
            $suce = $numero + 1;
            echo "<br> O número escolhido foi <strong>$numero</strong>!";
            echo "<br> O Seu antecessor é <strong>$ante</strong>!";
            echo "<br> O seu sucessor é <strong>$suce</strong>!";

        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
</head>
<body>
    <h1>Exemplo de php</h1>    

     <?php 
        date_default_timezone_set("America/Sao_Paulo");
        echo "Hoje e dia " . date("d/M/Y");
        echo "e a hora atual é " . date("G:i:s");
        $_nome = "Lucas Souza Leite";
        $idade = 26;
        $status = "Solteiro(a)";
        const PAIS = "Brasil";
        echo "Olá, $_nome, $idade anos - $status " . PAIS ."!";        
        
     ?>
</body>
</html>
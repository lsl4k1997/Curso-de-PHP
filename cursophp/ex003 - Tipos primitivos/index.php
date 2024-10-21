<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
     <?php 
     // 0x = hexadecimal | 0b = binário | 0 = octal //
      $num = 0b1010;
      echo "O valor da variável é $num";
      ?>
    
        <br>

      <?php 
      $v = 50;
      var_dump($v); //mostar o valor é tipo do dados, int,float,bolean,string...
      ?> 
      
        <br>

      <?php 
      $t = (int)03e10; //Era para ser do tipo float, forçando com (int) para inteiro.(coerção)
      var_dump($t);
      ?>

      <br>

      <?php
        $vet = [6,2.5,"João",5,2,false];
        var_dump($vet);
      ?>


      <br>


      <?php 
       class Pessoa{
        private string $nome;

       }
        $p = new Pessoa;
        var_dump($p)
      ?>

      
      <br>
      <br>
      <br>
      <br>


      <?php
        $k = false; //bolean
        var_dump($k);

        if  ($k == true ){
            print "Casado(a)"; 
          }
        else{
            print "Solteiro(a)";
          } 
        // O uso de condição foi fora do curso, estava curioso para saber como seria, é quase mesma coisa do js.
      ?>
  

</body>
</html>
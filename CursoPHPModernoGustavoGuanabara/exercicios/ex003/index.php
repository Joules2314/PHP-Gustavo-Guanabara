<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos primitivos em PHP</title>
    </head>

    <body>
        <h1>Teste de tipos primitivos</h1>
       <?php 
            // 0x = hexadecimal 0b = binario 0 = octal
           // $num = 0x1A;
          // echo "o valor da variavel é $num";

            // $v = "Gabriel";
           // var_dump($v);

           //$num = (integer) 3e2; // 3e2 = 3 x 10^2 coerção 
           //echo "O valor é $num";
           //var_dump($num);

           //$num = (int) "950";
           //var_dump($num);

           //$casado = false;
           //var_dump($casado);
           //print "O valor para casado é $casado";

           //$vet = [6, 2.5, "Maria", 3, false];
           //var_dump($vet);

           class Pessoa {
                private string $pessoa;
           }

           $p = new Pessoa;
           var_dump($p);
       ?> 
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 001</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <main>
            <h1>Resultado Final</h1>
            <?php 
                $num = $_GET["numero"] ?? 0;
                $sucessor = $num + 1;
                $anterior = $num - 1;
                echo "<p>O numero escolhio foi <strong>$num</strong></p>";
                echo "<p>O seu <em>antecessor</em> é $anterior</p>";
                echo "<p>O seu <em>secessor</em> é $sucessor</p>";
            ?>

            <button onclick="javascript:history.go(-1)">&#x2B05;  Voltar</button>
        </main>
    </body>
</html>
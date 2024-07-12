<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 009</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php 
            $valor1 = $_POST["v1"] ?? 0;
            $peso1 = $_POST["p1"] ?? 1;
            $valor2 = $_POST["v2"] ?? 0;
            $peso2 = $_POST["p2"] ?? 1;
        ?>
        <main>
            <h1>Media Aritiméticas</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="v1">Valor 1:</label>
                <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
                <label for="p1">Peso 1:</label>
                <input type="number" name="p1" id="idp1" value="<?=$peso1?>">
                <label for="v2">Valor 2:</label>
                <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
                <label for="p2">Peso 2:</label>
                <input type="number" name="p2" id="idp2" value="<?=$peso2?>">
                <input type="submit" value="Calcular Médias">
            </form>
        </main>

        <section>
            <h2>Calculando as Médias</h2>
            <?php 
                $msimples = ($valor1 + $valor2) / 2;
                $mponderado = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

                echo "Analisando os valores $valor1 e $valor2:";
                echo "<ul><li>A <strong>A Média Aritimética Simples</strong> entre os valores é igual a " .number_format($msimples, 2, ',', '.')."</li><li>A <strong>A Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a " .number_format($mponderado, 2, ',', '.')."</li></ul>";

            ?>
        </section>
    </body>
</html>
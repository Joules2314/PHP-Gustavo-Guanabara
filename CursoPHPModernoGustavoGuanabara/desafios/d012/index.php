    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 012</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <?php 
            $total = $_GET["sec"] ?? 1;
        ?>
        <main>
            <h1>Calculadora de Tempo</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="sec">Qual é o total de segundos?</label>
                <input type="number" name="sec" id="idsec" value="<?=$total?>">
                <input type="submit" value="Calcular">
            </form>
        </main>

        <section>
            <h2>Totalizando Tudo</h2>
            <?php 
                $sobra = $total;

                //Semana
                $semana = (int)($sobra/604800);
                $sobra = $sobra%604800;

                //Dias
                $dias = (int)($sobra/86400);
                $sobra = $sobra%86400;

                //Horas
                $horas = (int)($sobra/3600);
                $sobra = $sobra%3600;

                //Minutos
                $minuto = (int)($sobra/60);
                $sobra = $sobra%60;

                //Segundos
                $sec = $sobra;

                echo "<p>Analisando o valor que você digitou, <strong>" .number_format($total, 0, ',' , '.'). " segundos</strong> equivalem a um total de:</p>";
                echo "<ul><li>$semana semanas</li><li>$dias dias</li><li>$horas horas</li><li>$minuto minuto</li><li>$sec segundos</li></ul>"
            ?>
        </section>
    </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 11</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php 
            $valor = $_GET["valor"] ?? 0;
            $porc = $_GET["reaj"] ?? 0;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        ?>
        <main>
            <h1>Reajustador de Preços</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="valor">Preço do Produto (R$)</label>
                <input type="number" name="valor" id="idvalor" min="0.10" step="0.01" value="<?=$valor?>">
                <label for="reaj">Qual será o porcentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
                <input type="range" name="reaj" id="idreaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$porc?>">
                <input type="submit" value="Reajustar">
            </form>
        </main>

        <section>
            <h2>Resultado do Reajuste</h2>

            <?php 
                $calc = $valor * ($porc/100);
                $final = $valor + $calc;

                echo "<p>O produto que custava ".numfmt_format_currency($padrao , $valor , "BRL")." com <strong>$porc% de aumento</strong> vai pasaar a custar <strong>".numfmt_format_currency($padrao, $final, "BRL")."</strong> a partir de agora</p>"
            ?>
        </section>

        <script>
            //Declarações Automaticas
            mudaValor()

            function mudaValor() {
                p.innerText = idreaj.value;
            }
        </script>
    </body>
</html>
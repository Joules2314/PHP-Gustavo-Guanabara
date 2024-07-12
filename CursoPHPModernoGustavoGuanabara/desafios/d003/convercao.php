<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 003</title>
        <link rel="stylesheet" href="style.css">

    </head>

    <body>
        <main>
            <h1>Conversor de Moedas v1.0</h1>
            <?php 
                $valor = $_GET["valor"];
                $con = $valor/5.53;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus  ". numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $con, "USD") . "</strong></p>";
                echo"<p><strong>*Cotação fixa de R$5,53</strong> informada diretamente no código.</p>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </body>
</html>
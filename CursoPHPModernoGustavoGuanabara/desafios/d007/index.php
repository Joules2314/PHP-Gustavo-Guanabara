<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 007</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php 
            $salario = $_POST["salario"] ?? 0;
        ?>
        <main>
            <h1>Informe o seu salário</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
                <label for="salario">Salário (R$):</label>
                <input type="number" name="salario" id="idsalario" value="<?=$salario?>">
                <input type="submit" value="Calcular">
            </form>
            <p>Considerando o salário minimo de <strong>R$1.380,00</strong></p>
        </main>

        <section>
            <h2>Resultado Final</h2>
            <?php 
                $qnt = $salario/1380;
                $rest = $salario%1380;

                echo "<p>Quem recebe um salário de R\$" .number_format($salario, 2, ',' , '.'). " ganha <strong>".(int)$qnt ." salários mínimos</strong> + R\$ " .number_format($rest, 2, ',', '.'). ".</p>";
            ?>
        </section>
    </body>
</html>
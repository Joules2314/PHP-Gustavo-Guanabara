<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 008</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
            $num = $_GET["num"] ?? 0;
        ?>
        <main>
            <h1>Informe um número</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="num">Número</label>
                <input type="number" name="num" id="idnum" value="<?=$num?>">
                <input type="submit" value="Calcular Raízes">
            </form>
        </main>
        <section>
                <h2>Resultado Final</h2>
                <?php 
                    $raizqua = sqrt($num);
                    $raizcub = pow($num , 1/3);

                    echo "<p>Analizando o <strong>número $num</strong>, temos:</p>";
                    echo "<ul><li>A sua raiz quadrada é <strong>".number_format($raizqua, 3, ',' , '.')."</strong></li><li>A sua raiz cúbica é <strong>".number_format($raizcub, 3, ',' , '.')."</strong></li></ul>";
                ?>
            </section>
    </body>
</html>
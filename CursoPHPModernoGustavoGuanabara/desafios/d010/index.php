<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 010</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php 
            $nasc = $_GET["nasc"] ?? 2000;
            $idade = $_GET["idade"] ?? date("Y");
        ?>
        <main>
            <h1>Calculando a sua idade</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="nasc">Em que ano você nasceu:</label>
                <input type="number" name="nasc" id="isnasc" value="<?=$nasc?>">
                <label for="idade">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?=date("Y")?></strong>)</label>
                <input type="number" name="idade" id="ididade" value="<?=$idade?>">
                <input type="submit" value="Qual será a minha idade?">
            </form>
        </main>

        <section>
            <h2>Resultado</h2>
            <?php 
                $resul = $idade - $nasc;
                echo "<p>Quem nasceu em $nasc vai ter <strong>$resul anos</strong>  em $idade!</p>"; 
            ?>
        </section>
    </body>
</html>
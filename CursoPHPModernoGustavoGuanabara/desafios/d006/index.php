<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 006</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <?php 
            $dividendo = $_GET["dividendo"] ?? 1 ;
            $divisor = $_GET["divisor"] ?? 1;
        ?>

        <main>
            <h1>Anatomia da Divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="dividendo">Dividendo:</label>
                <input type="number" name="dividendo" id="iddividendo" value="<?=$dividendo?>">
                <label for="divisor">Divisor:</label>
                <input type="number" name="divisor" id="iddivisor" value="<?=$divisor?>">
                <input type="submit" value="Enviar">
            </form>
        </main>

        <section>
            <h2>Estrutura da Divisão</h2>
            <?php 
                $resul =  $dividendo/$divisor;
                $rest = $dividendo%$divisor;
            ?>
            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$rest?></td>
                    <td><?=(int) $resul?></td>
                </tr>
            </table>

        </section>
    </body>
</html>
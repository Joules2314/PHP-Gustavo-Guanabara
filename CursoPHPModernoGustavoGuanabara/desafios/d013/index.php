<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 013</title>
        <link rel="stylesheet" href="style.css">
        <style>
            img.nota {
                height: 50px;
                margin: 5px;
            }
        </style>
    </head>
    <body>

        <?php 
            $valor = $_GET["valor"] ?? 0;
            $padrao = numfmt_create("pt_BR" , NumberFormatter::CURRENCY);
        ?>
        <main>
            <h1>Caixa Eletronico</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <label for="valor">Qual valor você deseja sacar? (R$)*</label>
                <input type="number" name="valor" id="idvalor" step="5">
                <p>*Notas disponiveis: R$100 , R$50 , R$10 , R$5</p>
                <input type="submit" value="Sacar">
            </form>
        </main>

        <section>
            <h2>Saque de <?=numfmt_format_currency($padrao , $valor , "BRL")?> realizado</h2>
            <?php 
                $saque = $valor;

                //Notas de 100
                $cem = (int)($saque/100);
                $saque = $saque%100;

                //Notas de 50
                $cinquenta = (int)($saque/50);
                $saque = $saque%50;

                //Notas de 10
                $dez = (int)($saque/10);
                $saque = $saque%10;

                //Notas de 5
                $cinco = (int)($saque/5);
                $saque = $saque%5;
            ?>

            <ul>
                <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota">x<?=$cem?></li>
                <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$cinquenta?></li>
                <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota">x<?=$dez?></li>
                <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$cinco?></li>
            </ul>

        </section>
    </body>
</html>
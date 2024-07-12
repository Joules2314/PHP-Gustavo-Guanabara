<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Desafio PHP 004</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <main>
            <h1>Conversor de Moedas v2.0</h1>
            <?php 
                //Valor da cotação vindo direto da API do Banco Central
                $inicio =date("m-d-Y", strtotime("-7 days")) ;
                $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados= json_decode(file_get_contents($url), true);
       

                $cotacao = $dados["value"][0]["cotacaoCompra"];


                $valor = $_GET["valor"];
                $con = $valor/$cotacao;
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus  ". numfmt_format_currency($padrao, $valor, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $con, "USD") . "</strong></p>";
                echo"<p>*Cotação obtida diretamente do Banco Central do Brasil.</p>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
    </body>
</html>
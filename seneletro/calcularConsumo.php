<?php

//DEFININDO VALORES DAS VARIÁVEIS QUE VAMOS UTILIZAR SEMPRE

    //como declarar constantes?
    const VALOR_KWH_ALTO_CONSUMO = 0.42;
    const VALOR_KWH_ECONOMICO = 0.32; 

//VALIDANDO FORMULÁRIO E CRIANDO VARIÁVEIS

    if(isset($_POST["nomeCliente"]) && isset($_POST["consumoTotal"]) && isset($_POST["endereçoRua"]) 
    && isset($_POST["endereçoNumero"]))
    {
        
        $nomeCliente = $_POST["nomeCliente"]; //entre parênteses coloca-se o name usado no form (html)
        $consumoTotal = $_POST["consumoTotal"];
        $endereçoRua = $_POST["endereçoRua"];
        $endereçoNumero = $_POST["endereçoNumero"];
    }

    else
    {
        echo "<h1>Você não enviou as informação corretamente</h1>";
    }

//VERIFICANDO O CONSUMO E CALCULANDO O CALOR TOTAL DA CONTA

    if ($consumoTotal <= 120 )
    {
        $valorTotalConta = $consumoTotal * VALOR_KWH_ECONOMICO;
        $classeConsumo = "consumoEconomico";
    }
    else
    {
        $valorTotalConta = $consumoTotal * VALOR_KWH_ALTO_CONSUMO;
        $classeConsumo = "consumoNaoEconomico";
    }


    ?>

    <!--
// HTML
    -->
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style.css">

        <title>Emissão conta de energia</title>

    </head>
    <body>

    


        <h1> Conta de luz de <?= strtoupper ($nomeCliente)?></h1>
        <!-- <h4> Rua <?= $endereçoRua?>, <?= $endereçoNumero?></h4> -->
        <h4> Rua <?= "$endereçoRua, $endereçoNumero"?></h4>
        <h4 class="<?= $classeConsumo?>">Consumo: </h4>
        <h3 class="<?= $classeConsumo?>" ><?= $consumoTotal?> kWh</h3>
        <?php
            if($classeConsumo == "consumoEconomico")
            {
                echo "<h5>Obrigada por economizar!!!</h5>";
            }
            else{}
        ?>
        <h4>Valor a pagar: R$ </h4>
        <h2> <?= number_format($valorTotalConta,2,",",".") ?></h2>    
        
    </body>
    </html>
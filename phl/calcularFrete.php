<?php

//DEFININDO VALORES DAS VARIÁVEIS QUE VAMOS UTILIZAR SEMPRE

//como declarar constantes?
const VALOR_QUILOMETRO = 6.0;
const VALOR_PEDAGIO = 9.40; 

//VALIDANDO FORMULÁRIO E CRIANDO VARIÁVEIS

if(isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"]) && isset($_POST["distancia"]) 
&& isset($_POST["pedagios"]))
{
    
    $cidadeOrigem = $_POST["cidadeOrigem"]; //entre parênteses coloca-se o name usado no form (html)
    $cidadeDestino = $_POST["cidadeDestino"];
    $distancia = $_POST["distancia"];
    $pedagios = $_POST["pedagios"];
}

else
{
    echo "<h1>Você não enviou as informação corretamente</h1>";
}

//CALCULANDO O FRETE E CRIANDO VARIÁVEIS PARA HTML

$valorTotalViagem = ($distancia * VALOR_QUILOMETRO) + ($pedagios * VALOR_PEDAGIO);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Valor da Viagem</title>

</head>
<body>

    <h2> A viagem de <?= $cidadeOrigem ?> em direção a <?= $cidadeDestino?> irá custar um valor de:</h2>
    <h1> R$ <?= $valorTotalViagem?></h1>
</body>
</html>
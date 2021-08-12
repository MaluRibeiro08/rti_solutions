<?php

//CRIANDO AS VARIÁVEIS 

    $nome = "abrobrinha";
    $salarioAtual = 2000.00;
    $salarioReajustado = 3000.00;
    $genero = "Feminino";
    $cargo = " Gerente";

//VERIFICANDO O FORM E ATRIBUINDO OS VALORES CORRETOS
    if(isset($_POST["nome"]) && isset($_POST["salarioAtual"])  &&  isset($_POST["genero"]) && isset($_POST["cargo"]))
    {
        $nome = $_POST["nome"];
        $salarioAtual = $_POST["salarioAtual"];
        // $salarioReajustado = 0.0;
        $genero = ($_POST["genero"]);
        $cargo = $_POST["cargo"];
    }

    else
    {
        echo "<h1>As informações não foram enviadas corretamente</h1>";
        die;
    }

//CALCULANDO O VALOR DE REAJUSTE

    if ($salarioAtual >5000)
    {
        $salarioReajustado = $salarioAtual + (($salarioAtual/100) * 10);
    }

    else
    {
        $salarioReajustado = $salarioAtual + (($salarioAtual/100) * 20);
    }

    ?><!-- 

//MONTANDO HTML-->

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Gowun+Dodum&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="style.css">

        <title>Fulbank - Reajuste de Salário</title>

    </head>
    <body>

        <header>
         <h1>Fulbank ;)</h1> 
        </header>

        <main class="mainResultado">
                <h2>Fulbank - Reajuste Salarial</h2>

                <div class="informacoes">
                    
                    <p><em>Nome:</em> <?=$nome?>  </p>
                    <p><em>Salário atual:</em>  R$ <?=number_format($salarioAtual, 2, ",", ".")?>  </p>
                    <p><em>Gênero: </em><?=$genero?>  </p>
                    <p><em>Cargo: </em><?=$cargo?>  </p>
                </div>
                

                <div class="resposta">
                    <p>Olá, <?=$nome?>!!</p>
                    <p>Você passará a receber <em>R$ <?= number_format($salarioReajustado, 2, ",", ".") ?></em> no cargo de <em><?=$cargo?></em> </p>

                </div>
                
                <button><a href="index.html">Calcular Novamente</a></button>
            
        </main>

        <footer>
            <span> Copyright &copy; | Maria Luiza Ribeiro Teixeira  </span>
        </footer>
        
    </body>
    </html>
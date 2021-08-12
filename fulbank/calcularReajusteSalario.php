<?php


$nome = "abrobrinha";
$salarioAtual = 2000.00;
$salarioReajustado = 3000.00;
$genero = "Feminino";
$cargo = " Gerente";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            
            
    
            <button>Calcular Novamente</button>
        
    </main>

    <footer>
        <span> Copyright &copy; | Maria Luiza Ribeiro Teixeira  </span>
    </footer>
    
</body>
</html>
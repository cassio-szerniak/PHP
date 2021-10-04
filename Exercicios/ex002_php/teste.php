<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{color: blue; text-shadow: 1px 1px 2px black;}
        h2{color: lightcoral;
        }
    </style>
</head>
<body>
    <h1>Apredendo PHP</h1>
        <h2>
            <?php
                $nome = "Pedro";
                $pai = "Cássio";
                echo $nome, "<br/>";
                echo $pai, "<br/>";
                echo "<br/>Testando a variável '$pai' dentro das aspas";            
            ?>
        </h2>
</body>
</html>
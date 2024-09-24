<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Destino</title>
</head>
<body>
    <?php
    $array = array("<img src='imgs/stock1.jpg'> ", 
    "<img src='imgs/stock2.jpg'> ", 
    "<img src='imgs/stock3.jpg'> ", 
    "<img src='imgs/stock4.jpg'> ", 
    "<img src='imgs/stock5.jpg'> ", 
    "<img src='imgs/stock6.jpg'> ");

    echo 'O array é: ' . implode(", ", $array);
    echo '<br> Esse array tem: ' . count($array) . ' item(s).';
    echo '<br> O array invertido fica: ' . implode(", ", array_reverse($array));
    echo '<br> O primeiro elemento do array (removido) é: ' . array_shift($array);
    array_unshift($array, "<img src='imgs/stock1.jpg'>");
    echo '<br> Re-adicionando o primeiro elemento do array: ' . implode(', ', $array);
    ?>
</body>
</html>
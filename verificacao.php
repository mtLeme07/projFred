<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificando...</title>
</head>
<body>
<?php
//SENHAS CORRETAS
    $cUser = 'Matheus';
    $cPsswrd = '123';
//SENHAS INSERIDAS
    $user = md5(($_POST["txt_user"]));
    $psswrd = md5(($_POST["txt_psswrd"]));
    if($user == md5($cUser) && $psswrd == md5($cPsswrd)){
        header('Location:destino.php');       
    }
    else{
        echo 'Senha ou Usuario Incorreto(s)';
    }
    ?>
</body>
</html>
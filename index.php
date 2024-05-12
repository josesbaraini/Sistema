<?php
require "verifica.php";






if (isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"])):?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Opa <?php echo $nomeUser; ?> bom, sistema ainda ta atuzalizando ett c vai ter esperar :(, mas como eu sou uma cara muito legal manda la no privado do seu Zé
    seu usuario, senha, e uma foto dessa tela que ele vai te dar um prêmio dependendo de qual sua colocação em descobrir essas informações :)
</h1>

<a href="logout.php" > SAIR</a>
    
</body>
</html>


<?php else: header("Location: html.php"); endif;
?>
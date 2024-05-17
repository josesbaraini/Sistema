<?php
require "verifica.php";






if (isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"])):?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styles-painel.css">
</head>
<body>
    <header>
        <div class="nomeclasseraca">
            <h1 class=nome><?php echo $nomeUser; ?></h1>
            <div class="classerace">
                <p class="raca"><?php echo $raceUser; ?></p>
                <p class="classe"></p>
            </div>
        </div>
        <div class="sair"><a href="logout.php" >SAIR</a></div>
    </header>
        <div class="input-group" >
          <input type="text" id="inputComand">
        </div>


    <div class="janela" id="estatisticas">

        
        <div class="x" id="estatisticas-X">
        
        </div>
        <div class="-" id="estatisticas--">
            
        </div>

        <div class="title" id=-estatisticas-title>
            <h1 class="sys-font" id="txttitle">ESTATISTÍCAS</h1>
        </div>

        <div class="info" id="estatisticas-info">
            <div class="stat-lines">
                <p class="sys-font">NOME: <?php echo $persName; ?></p>
                <P class="sys-font">NIVEL: <?php echo $perslv; ?></P>
                </div>
            <div class="stat-lines">
                <P class="sys-font">CLASSE: <?php echo $classUser; ?></P>
                <p class="sys-font">HP:<?php echo $hp; ?></p>
            </div>
            <div class="stat-lines">
                <P class="sys-font">TÍTULO: <?php echo $perstitu; ?></P>
                <P class="sys-font">MP:<?php echo $mp; ?></P>
            </div>
        </div>

        <div class="info" id="estatisticas-atributos">
            <div class="att-lines">
                <p class="sys-font">FORÇA: <?php echo $str; ?></p>
                <P class="sys-font">SABEDORIA: <?php echo $wis; ?></P>
            </div>
            <div class="att-lines">
                <P class="sys-font">INTELIGENCIA: <?php echo $int; ?></P>
                <p class="sys-font">CONSTITUIÇÃO: <?php echo $con; ?></p>
            </div>
            <div class="att-lines">
                <P class="sys-font">CARISMA: <?php echo $cha; ?></P>
                <P class="sys-font">DEXTREZA: <?php echo $dex; ?></P>
            </div>
        </div>



    </div>


    <script src="scripts/script-painel.js" > </script>
</body>
</html>


<?php else: header("Location: index.html"); endif;
?>
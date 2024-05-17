<?php
require "conction.php";






if (isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"])){
    require_once 'Ususario.class.php';
    $u = new Usuario();


    $listLogged= $u-> logged($_SESSION["iduser"]);

    $classUser=($u-> seletor($_SESSION["iduser"],"classe"))["nomeclasse"];
    $raceUser=($u-> seletor($_SESSION["iduser"],"raca"))["nomeraca"];
    $nomeUser = $listLogged["usuario"];
    $persoinfo= $u-> persoinfo($_SESSION["iduser"]);
    $persid=$persoinfo["idpersonagem"];
    $persName=$persoinfo['nomepersonagem'];
    $perstitu=$persoinfo['titulo'];
    $perslv=$persoinfo['nivel'];

    $persatt=$u->persatt($persid);
    $str=$persatt['forca'];
    $dex=$persatt['destreza'];
    $con=$persatt['constituicao'];
    $wis=$persatt['sabedoria'];
    $int=$persatt['inteligencia'];
    $cha=$persatt['carisma'];
    $hp=$persatt['hp'];
    $mp=$persatt['mp'];
    
    

}else{
    header("Location: index.html");

}



?>
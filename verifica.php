<?php
require "conction.php";






if (isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"])){
    require_once 'Ususario.class.php';
    $u = new Usuario();


    $listLogged= $u-> logged($_SESSION["iduser"]);
    $nomeUser = $listLogged["usuario"];

}else{
    header("Location: html.php");
}



?>
<?php 

if (isset($_GET["usuario"]) && !empty($_GET["usuario"]) && isset($_GET["senha"]) && !empty($_GET["senha"])) {
    
    require "conction.php";
    require "Ususario.class.php";

    $u=new Usuario();

    $senha = addslashes($_GET["senha"]);
    $usuario = addslashes($_GET["usuario"]);

    if ($u->login($senha , $usuario) == true){
        if (isset($_SESSION['iduser'])) {
            header("Location: index.php");
            
        } else{
            header("Location: index.html");
        }
    }else{
        header("Location: index.html");
    }
        



}else {
    header("Location: index.html");
}










?>
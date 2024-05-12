<?php 

if (isset($_POST["usuario"]) && !empty($_POST["usuario"]) && isset($_POST["senha"]) && !empty($_POST["senha"])) {
    
    require "conction.php";
    require "Ususario.class.php";

    $u=new Usuario();

    $senha = addslashes($_POST["senha"]);
    $usuario = addslashes($_POST["usuario"]);

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
<?php
$localhost = "roundhouse.proxy.rlwy.net:33030";
$user = "root";
$passw = "PVOHCUHcTVRdDkZDzyoIxQgQubBmAtiT";
$banco = "railway";

session_start();

global $pdo;
try {

   
    
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost,$user,$passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch (PDOException $e){ 
    echo"Erro:".$e->getmansege();
    exit;

}






?>
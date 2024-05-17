<?php 

class Usuario{

    public function login ($senha,$usuario){
        global $pdo;

        $sql="SELECT * FROM jogador WHERE usuario=:usuario AND senha=:senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("usuario", $usuario);
        $sql->bindValue("senha", $senha);
        $sql->execute();

        

        if ($sql->rowCount() >0 ) {
            $dado= $sql->fetch();
    
            $_SESSION["iduser"]= $dado["idjogador"];
            return true;
            
        } else{
            return false;
        }
    }

    public function logged($id){
        global $pdo;
        $array=array();
        
        

        $sql="SELECT * FROM jogador WHERE idjogador = :idjogador";
        $sql = $pdo-> prepare($sql);
        $sql-> bindvalue("idjogador",$id);
        $sql-> execute();



        if ($sql->rowCount() >0 ) {
            $array= $sql->fetch();
            return $array;}

    }
    
    public function seletor($id,$qual){
        global $pdo;
        $array=array();
        $sql="SELECT * FROM personagem WHERE idjogador = :idjogador";

        $sql = $pdo-> prepare($sql);
        $sql-> bindvalue("idjogador",$id);
        $sql-> execute();

        if ($sql->rowCount() >0 ) {
            $array= $sql->fetch();}

        $qual=array($qual,"id".$qual,"nome".$qual);
        $classid=$array[$qual[1]];
        

        $sql="SELECT ".$qual[2]." FROM ".$qual[0]." WHERE ".$qual[1]." = :".$qual[1]."";
        $sql = $pdo-> prepare($sql);
        $sql-> bindvalue($qual[1],$classid);
        $sql-> execute();

        if ($sql->rowCount() >0 ) {
            $array= $sql->fetch();
            return $array;}
        

    }


    public function persoinfo($id){
        global $pdo;
        $array=array();
        $sql="SELECT * FROM personagem WHERE idjogador = :idjogador";

        $sql = $pdo-> prepare($sql);
        $sql-> bindvalue("idjogador",$id);
        $sql-> execute();

        if ($sql->rowCount() >0 ) {
            return $array= $sql->fetch();
        }





    }


    public function persatt($id){
        global $pdo;
        $array=array();
        $sql="SELECT * FROM atributo WHERE idatributo = :idpersonagem";

        $sql = $pdo-> prepare($sql);
        $sql-> bindvalue("idpersonagem",$id);
        $sql-> execute();

        if ($sql->rowCount() >0 ) {
            return $array= $sql->fetch();
        }





    }



    }

?>
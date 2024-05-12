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
            return $array;

    }

    


    }
}
?>
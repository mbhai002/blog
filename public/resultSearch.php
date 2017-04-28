<?php
include_once 'cnx.php';
if(isset($_GET['motclef'])){
    $motclef = $_GET['motclef'];
    $q = array('motclef'=>$motclef. '%');
    $sql = 'SELECT titre,contenu FROM articles WHERE titre like :motclef or contenu like :motclef';
    $req = $cnx->prepare($sql);
    $req->execute($q);
    $count = $req->rowCount($sql);

    if($count){
        while ($result = $req->fetch(PDO::FETCH_OBJ)){
            echo " Titre :".$result->title."<br/>Message:".$result->message."<br/>";
        }
    }else{
        echo "Aucun resultat pour :".$motclef;
    }
}


?>
<?php

include "../entities/carte.php";
include "../config.php";
class cartec
{

  function ajouter($client)
  {

      $sql ="insert into carte (id_carte,id_c,pts) values (0,:id_c,0)" ;
      $db = config::getConnexion();
      $req = $db->prepare($sql);
      $id_c = $client->getid_c();
      $req->bindValue(':id_c',$id_c);
    try {
      $req->execute();
      return true;
    }
    catch (Exception $e)
    {
      echo '3andek 8alta :'.$e->getMessage() ;
      return false ;
    }
  }

  function afficher($client)
  {
    $sql ="select * from carte" ;
    $db = config::getConnexion();
    try {
          $tab = $db->query($sql);
          return $tab;

    } catch (Exception $e) {
       echo '3andek 8alta :'.$e->getMessage();
    }


  }/*
  function modifierclient($client,$id){
		$sql="UPDATE client SET email=:email,nom=:nom,prenom=:prenom,numtel=:numtel,date=:date WHERE id_client=:id";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		    $email=$client->getemail();
        $nom=$client->getnom();
        $prenom=$client->getprenom();
        $numtel=$client->getnumtel();
        $date=$client->getdate();
		$datas = array('id_client'=>$id, ':nom'=>$nom,':prenom'=>$prenom, ':email'=>$email,':date'=>$date,':numtel'=>$numtel);
		$req->bindValue(':id',$id);
		$req->bindValue(':email',$email);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':numtel',$numtel);
		$req->bindValue(':date',$date);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}*/

}

 ?>

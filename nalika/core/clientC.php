<?php
include "$_SERVER[DOCUMENT_ROOT]/electronic/web/config.php";
include "$_SERVER[DOCUMENT_ROOT]/electronic/web/entities/client.php";
class clientc
{

  function ajouter($client)
  {

      $sql ="insert into client (id_client,nom,prenom,mdp,email,date,numtel) values (0,:nom,:prenom,:mdp,:email,:date,:numtel)" ;
      $db = config::getConnexion();
      $req = $db->prepare($sql);
      $email = $client->getemail();
      $nom =$client->getnom();
      $prenom =$client->getprenom();
      $date =$client->getdate();
      $numtel =$client->getnumtel();
      $mdp =$client->getmdp();

      $req->bindValue(':email',$email);
      $req->bindValue(':nom',$nom);
      $req->bindValue(':prenom',$prenom);
      $req->bindValue(':date',$date);
      $req->bindValue(':numtel',$numtel);
      $req->bindValue(':mdp',$mdp);
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

  function afficherclients(){
  		//$sql="SElECT * From client e inner join formationphp.client a on e.cin= a.cin";
  		$sql="SElECT * From client";
  		$db = config::getConnexion();
  		try{
  		$liste=$db->query($sql);
  		return $liste;
  		}
          catch (Exception $e){
              die('Erreur: '.$e->getMessage());
          }
  	}
    function supprimerclient($id){
		$sql="DELETE FROM client where id_client=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue('id',$id);
		try{
            $req->execute();
            header('Location: data-table.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$cin){
		$sql="UPDATE client SET cin=:cinn, nom=:nom,prenom=:prenom,nbHeures=:nbH,tarifHoraire=:tarifH WHERE cin=:cin";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{
        $req=$db->prepare($sql);
		    $cinn=$client->getCin();
        $nom=$client->getNom();
        $prenom=$client->getPrenom();
        $nb=$client->getNbHeures();
        $tarif=$client->getTarifHoraire();
		$datas = array(':cinn'=>$cinn, ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':nbH'=>$nb,':tarifH'=>$tarif);
		$req->bindValue(':cinn',$cinn);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':nbH',$nb);
		$req->bindValue(':tarifH',$tarif);


            $s=$req->execute();

           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }

	}

}

 ?>

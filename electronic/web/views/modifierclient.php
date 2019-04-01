<?PHP
include "../core/clientC.php";

if (isset($_POST['email']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mdp']) and isset($_POST['nmdp']) )
{
	$client1=new client($_POST['nom'],$_POST['prenom'],$_POST['mdp'],$_POST['email'],$_POST['date'],$_POST['numtel']);
	$client1C=new clientC();
	$client1C->modifierclient($client1,$_POST['id_client']);
	header('location:account.php');
}else
{
	echo "vérifier les champs";
}
?>

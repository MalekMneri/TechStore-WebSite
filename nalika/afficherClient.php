<?PHP
include "core/clientC.php";
include "core/carteC.php";
$client1C=new clientC();
$liste=$client1C->afficherclients();

//var_dump($listeclients->fetchAll());
?>
<table id="myTable" border="2px">
  <thead>
    <tr>
      <th></th>
      <th>ID Client</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Mot De passe</th>
      <th>Email</th>
      <th>Date de Naissance</th>
      <th>Numéro téléphone</th>
    </tr>
  </thead>
  <tbody>
    <?PHP
    foreach($liste as $row){
    	?>
    <tr>
      <td></td>
      <td><?PHP echo $row['id_client']; ?></td>
      <td><?PHP echo $row['nom']; ?></td>
      <td><?PHP echo $row['prenom']; ?></td>
      <td><?PHP echo $row['mdp']; ?></td>
      <td><?PHP echo $row['email']; ?></td>
      <td><?PHP echo $row['date']; ?></td>
      <td><?PHP echo $row['numtel']; ?></td>
      <td>
        <form method="POST" action="supprimerClient.php">
      <input type="submit" name="supprimer" value="supprimer">
      <input type="hidden" value="<?PHP echo $row['id_client']; ?>" name="id_client">
        </form>
      </td>

    </tr>
  <?PHP
}
?>
  </tbody>
</table>

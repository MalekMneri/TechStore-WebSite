<?PHP
$carte1C=new carteC();
$liste=$carte1C->afficher();

//var_dump($listeclients->fetchAll());
?>
<table id="table" border="2px">
  <thead>
    <tr>
      <th></th>
      <th>ID Carte</th>
      <th>Id Client Propietère</th>
      <th>Points fidelité</th>
    </tr>
  </thead>
  <tbody>
    <?PHP
    foreach($liste as $row){
    	?>
    <tr>
      <td></td>
      <td><?PHP echo $row['id_carte']; ?></td>
      <td><?PHP echo $row['id_c']; ?></td>
      <td><?PHP echo $row['pts']; ?></td>
      <td>
        <form method="POST" action="supprimerCarte.php">
      <input type="submit" name="supprimer" value="supprimer">
      <input type="hidden" value="<?PHP echo $row['id_carte']; ?>" name="id_carte">
        </form>
      </td>

    </tr>
  <?PHP
}
?>
  </tbody>
</table>

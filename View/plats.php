<?php
include 'header.php';
?>
<div class="container">
  <div class="d-flex justify-content-center">
    <h1>Plats</h1>
  </div>
  <div class="d-flex justify-content-end">
    <a href="../Controller/Route.php?action=add_plat"><button class="btn btn-primary">Ajouter Plats </button></a>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Libelle</th>
        <th scope="col">Prix</th>
        <th scope="col" style="width: 25%">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($plats as $plat) { ?>
        <tr>
          <td> <?= $plat['PL_Libelle'] ?> </td>
          <td> <?php echo $plat['PL_Prix'] ?></td>
          <td>
            <a href="../Controller/Route.php?action=get_plat&id=<?= $plat['PL_Id'] ?>">
              <button class="btn btn-primary">Voir Détails</button>
            </a>
            <a href="../Controller/Route.php?action=modify_plat&id=<?= $plat['PL_Id'] ?>">
              <button class="btn btn-info">Modifier</button>
            </a>
            <a href="../Controller/Route.php?action=remove_plat&id=<?= $plat['PL_Id'] ?>">
              <button class="btn btn-danger">Delete</button>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

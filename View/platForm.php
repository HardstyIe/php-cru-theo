<?php
include('header.php');
?>
<div class="container">
  <div class="d-flex justify-content-center">
    <h1>Ajout d'un plat</h1>
  </div>
  <form action="../Controller/Route.php?action=insert_plat" method="post">
    <div class="mb-3">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" class="form-control" id="libelle" placeholder="Nom du Plat" name="libelle">
    </div>
    <div class="mb-3">
      <label for="prix" class="form-label">Prix</label>
      <input type="text" class="form-control" id="Prix" placeholder="Prix du Plat" name="prix">
    </div>
    <div>
      <select class='form-control' name="restaurant" id="restaurants-select">
        <option value="" selected> Choisissez un Restaurants </option>
        <?php foreach ($restaurants as $r) { ?>
          <option value="<?= $r['RE_Id'] ?>" id="<?= $r['RE_Id'] ?>"><?= $r['RE_Libelle'] ?></option>;
        <?php } ?>
      </select>
    </div>
    <div class="d-flex justify-content-end">
      <input type="submit" class="btn btn-primary">
    </div>
  </form>
</div>

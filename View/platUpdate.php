<?php
include('header.php');
?>
<div class="container">
  <div class="d-flex justify-content-center">
    <h1>Modification du plat <?php echo $pl['PL_Libelle'] ?></h1>
  </div>
  <form action="../Controller/Route.php?action=update_plat" method="post">
    <input type="hidden" name="id" value='<?php echo $pl['PL_Id'] ?>'>
    <div class="mb-3">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" class="form-control" id="libelle" placeholder="Nom du plat" name="libelle" value="<?php echo $pl['PL_Libelle'] ?>">
    </div>
    <div class="mb-3">
      <label for="Prix" class="form-label">Prix</label>
      <input type="text" class="form-control" id="adresse" placeholder="Prix du plat" name="prix" value="<?php echo $pl['PL_Prix'] ?>">
    </div>
    <select class='form-control' name="restaurant" id="restaurants-select">
      <option value="" selected> Choisissez un Restaurants </option>

      <?php foreach ($restaurants as $r) { ?>
        <option value="<?= $r['RE_Id'] ?>" id="<?= $r['RE_Id'] ?>" <?php if ($r['RE_Id'] == $pl['RE_Id']) echo 'selected' ?>><?= $r['RE_Libelle'] ?></option>;
      <?php } ?>
    </select>
    <div class="d-flex justify-content-end">
      <input type="submit" class="btn btn-primary" value="Modifier">
    </div>
  </form>
</div>

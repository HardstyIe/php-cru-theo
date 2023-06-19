<?php
include('header.php');
?>
<div class="container">
  <div class="d-flex justify-content-center">
    <h1>Modification du restaurant <?php echo $rest['RE_Libelle'] ?></h1>
  </div>
  <form action="../Controller/Route.php?action=update_restaurant" method="post">
    <input type="hidden" name="id" value='<?php echo $rest['RE_Id'] ?>'>
    <div class="mb-3">
      <label for="libelle" class="form-label">Libelle</label>
      <input type="text" class="form-control" id="libelle" placeholder="Nom du Restaurant" name="libelle" value="<?php echo $rest['RE_Libelle'] ?>">
    </div>
    <div class="mb-3">
      <label for="adresse" class="form-label">Adresse</label>
      <input type="text" class="form-control" id="adresse" placeholder="Adresse du Restaurant" name="adresse" value="<?php echo $rest['RE_Adresse'] ?>">
    </div>
    <div class="mb-3">
      <label for="numero" class="form-label">Numéro</label>
      <input type="text" class="form-control" id="numero" placeholder="Numero du Restaurant" name="numero" value="<?php echo $rest['RE_Numero'] ?>">
    </div>
    <div class="d-flex justify-content-end">
      <input type="submit" class="btn btn-primary" value="Modifier">
    </div>
  </form>
</div>

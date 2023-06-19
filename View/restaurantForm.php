<?php
include ('header.php');
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <h1>Ajout d'un restaurant</h1>
    </div>
    <form action="../Controller/Route.php?action=insert_restaurant" method="post">
        <div class="mb-3">
            <label for="libelle" class="form-label">Libelle</label>
            <input type="text" class="form-control" id="libelle" placeholder="Nom du Restaurant" name="libelle">
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse" placeholder="Adresse du Restaurant" name="adresse">
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Numéro</label>
            <input type="text" class="form-control" id="numero" placeholder="Numero du Restaurant" name="numero">
        </div>
        <div class="d-flex justify-content-end">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
</div>

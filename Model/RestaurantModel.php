<?php

class RestaurantModel
{
  private $bdd;

  public function __construct()
  {
    $res = new BDD();
    $this->bdd = $res->getBdd();
  }

  function getAllRestaurants()
  {
    $req = $this->bdd->prepare('SELECT * FROM restaurant ');
    $req->execute();

    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  function addRestaurant($libelle, $numero, $adresse)
  {
    $req = $this->bdd->prepare("INSERT INTO restaurant (RE_Libelle, RE_Adresse, RE_Numero) VALUES (:libelle, :adresse, :numero)");
    return $req->execute([':libelle' => $libelle,  ':adresse' => $adresse, ':numero' => $numero]);
  }

  public function getRestaurantById($id)
  {
    $req = $this->bdd->prepare("SELECT * from restaurant Where RE_Id = :id");
    $req->execute([':id' => $id]);

    return $req->fetch();
  }

  public function updateRestaurant($id, $libelle, $numero, $adresse)
  {
    $req = $this->bdd->prepare("UPDATE restaurant
            SET RE_Libelle = :libelle,
                RE_Numero = :numero,
                RE_Adresse = :adresse
            WHERE RE_Id = :id ");
    return $req->execute([':libelle' => $libelle,  ':adresse' => $adresse, ':numero' => $numero, ':id' => $id]);
  }

  public function deleteRestaurant($id)
  {
    $req = $this->bdd->prepare("DELETE FROM restaurant WHERE RE_Id = :id ");
    return $req->execute([':id' => $id]);
  }
}

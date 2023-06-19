<?php

class PlatModel
{
  private $bdd;

  public function __construct()
  {
    $res = new BDD();
    $this->bdd = $res->getBdd();
  }

  function getAllPlat()
  {
    $req = $this->bdd->prepare('SELECT PL_Id,PL_Libelle,PL_Prix,FK_Restaurant FROM plat');
    $req->execute();

    return $req->fetchAll(PDO::FETCH_ASSOC);
  }

  function addPlat($libelle, $prix, $restLib)
  {
    $req = $this->bdd->prepare("INSERT INTO plat (PL_Libelle, PL_Prix, FK_Restaurant) VALUES (:libelle, :prix, :rest)");
    return $req->execute([':libelle' => $libelle,  ':prix' => $prix, ':rest' => $restLib]);
  }

  public function getPlatById($id)
  {
    $req = $this->bdd->prepare("SELECT PL_Id,PL_Libelle,PL_Prix,FK_Restaurant from plat INNER JOIN restaurant ON plat.FK_Restaurant = restaurant.RE_Id Where PL_Id = :id");
    $req->execute([':id' => $id]);
    return $req->fetch();
  }

  public function updatePlat($id, $libelle, $prix, $restLib)
  {
    $req = $this->bdd->prepare("UPDATE plat
            SET PL_Libelle = :libelle,
                PL_Prix = :prix,
                FK_Restaurant = :rest
            WHERE PL_Id = :id ");
    return $req->execute([':libelle' => $libelle, ':prix' => $prix, ':id' => $id, ':rest' => $restLib]);
  }

  public function deletePlat($id)
  {
    $req = $this->bdd->prepare("DELETE FROM plat WHERE PL_Id = :id ");
    return $req->execute([':id' => $id]);
  }
}

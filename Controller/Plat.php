<?php
require('../Model/PlatModel.php');

class Plat
{
  private $platModel;

  public function __construct()
  {
    $this->platModel = new PlatModel();
  }

  function getAllPlat()
  {
    return $this->platModel->getAllPlat();
  }

  function addPlat($libelle, $prix, $rest)
  {
    $this->platModel->addPlat($libelle, $prix, $rest);
  }

  function getPlatById($id)
  {
    return $this->platModel->getPlatById($id);
  }

  function updatePlat($id, $libelle, $prix, $restLib)
  {
    return $this->platModel->updatePlat($id, $libelle, $prix, $restLib);
  }

  function deletePlat($id)
  {
    $this->platModel->deletePlat($id);
  }
}

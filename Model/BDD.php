<?php

class BDD
{
  private $bdd;
  public function __construct()
  {
    try {
      $this->bdd = new PDO('mysql:host=localhost;dbname=;charset=utf8', '', '');
    } catch (PDOException $e) {
      print($e);
    }
  }

  public function getBdd()
  {
    return $this->bdd;
  }
}

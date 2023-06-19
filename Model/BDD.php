<?php

class BDD
{
  private $bdd;
  public function __construct()
  {
    try {
      $this->bdd = new PDO('mysql:host=localhost;dbname=restaurants;charset=utf8', 'root', 'f6KA@2,9Em[vbDF;~dP/VjrqFaUD');
    } catch (PDOException $e) {
      print($e);
    }
  }

  public function getBdd()
  {
    return $this->bdd;
  }
}

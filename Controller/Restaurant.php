<?php
require('../Model/RestaurantModel.php');

class Restaurant
{
  private $restaurantModel;

  public function __construct()
  {
    $this->restaurantModel = new RestaurantModel();
  }

  function getAllRestaurant()
  {
    return $this->restaurantModel->getAllRestaurants();
  }

  function addRestaurant($libelle, $numero, $adresse)
  {
    $this->restaurantModel->addRestaurant($libelle, $numero, $adresse);
  }

  function getRestaurantById($id)
  {
    return $this->restaurantModel->getRestaurantById($id);
  }

  function updateRestaurant($id, $libelle, $numero, $adresse)
  {
    return $this->restaurantModel->updateRestaurant($id, $libelle, $numero, $adresse);
  }

  function deleteRestaurant($id)
  {
    $this->restaurantModel->deleteRestaurant($id);
  }
}

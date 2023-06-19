<?php
require('../Model/BDD.php');
require('./plat.php');
require('./Restaurant.php');

$restaurant = new Restaurant();
$plat = new Plat();

switch ($_GET['action']) {
  case 'get_plats':
    $plats = $plat->getAllPlat();
    include('../View/plats.php');
    break;
  case 'add_plat':
    $restaurants = $restaurant->getAllRestaurant();
    include('../View/platForm.php');
    break;
  case 'insert_plat':
    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];
    $restLib = $_POST['restaurant'];
    $plat->addPlat($libelle, $prix, $restLib);
    header('Location: Route.php?action=get_plats');
    break;
  case 'get_plat':
    $pl = $plat->getPlatById($_GET['id']);
    include('../View/platDetails.php');
    break;
  case 'modify_plat':
    $restaurants = $restaurant->getAllRestaurant();
    $pl = $plat->getPlatById($_GET['id']);
    include('../View/platUpdate.php');
    break;
  case 'update_plat':
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $prix = $_POST['prix'];
    $restLib = $_POST['restaurant'];
    $plat->updatePlat($id, $libelle, $prix, $restLib);
    header('Location: Route.php?action=get_plats');
  case 'remove_plat':
    $id = $_GET['id'];
    $plat->deletePlat($id);
    header('Location: Route.php?action=get_plats');
    break;
  case 'get_restaurants':
    $restaurants = $restaurant->getAllRestaurant();
    include('../View/restaurants.php');
    break;
  case 'add_restaurant':
    include('../View/restaurantForm.php');
    break;
  case 'insert_restaurant':
    $libelle = $_POST['libelle'];
    $numero = $_POST['numero'];
    $adresse = $_POST['adresse'];
    $restaurant->addRestaurant($libelle, $numero, $adresse);
    header('Location: Route.php?action=get_restaurants');
    break;
  case 'get_restaurant':
    $rest = $restaurant->getRestaurantById($_GET['id']);
    include('../View/restaurantDetails.php');
    break;
  case 'modify_restaurant':
    $rest = $restaurant->getRestaurantById($_GET['id']);
    include('../View/restaurantUpdate.php');
    break;
  case 'update_restaurant':
    $id = $_POST['id'];
    $libelle = $_POST['libelle'];
    $numero = $_POST['numero'];
    $adresse = $_POST['adresse'];
    $restaurant->updateRestaurant($id, $libelle, $numero, $adresse);
    header('Location: Route.php?action=get_restaurants');
  case 'remove_restaurant':
    $id = $_GET['id'];
    $restaurant->deleteRestaurant($id);
    header('Location: Route.php?action=get_restaurants');
    break;
}

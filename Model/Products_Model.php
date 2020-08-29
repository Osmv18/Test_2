<?php

/**
 * Description of Products_Model
 *
 * @author Osmin Medrano Varela
 */
require_once 'Model/connection.php';

class Products_Model {
  public $name_product;
  public $categorie;
  public $price;
  public $quantity;
  public $description;
  public $id_product;
  public $carrito = [];
  
  /**
   * constructor method 
   * @param string $pname_product
   * @param int $pcategorie
   * @param int $pprice
   * @param int $pquantity
   * @param string $pdescription
   * @param int $pid_product
   */
  public function __construct($pname_product = "", $pcategorie = "", $pprice = "", $pquantity = "", $pdescription = "", $pid_product = 0) {
    $this->name_product = $pname_product;
    $this->categorie = $pcategorie;
    $this->price = $pprice;
    $this->quantity = $pquantity;
    $this->description = $pdescription;
    $this->id_product = $pid_product;
  }

  /**
   * View products method
   * @param int $id_product
   * @return \Products_Model
   */
  public function readProduct($id_product = 0) {
    $rows = [];
    try {
      $sql = "SELECT * FROM products";
      $pdo = new connection();
      $pdo = $pdo->connect();
      if ($id_product) {
	$sql .= " WHERE id_product = '$id_product'";
      }
      $result = $pdo->query($sql);
      foreach ($result->fetchAll() as $value) {
	$rows [] = new Products_Model($value['name_product'], $value['id_categorie'], $value['price'], $value['quantity'], $value['description'], $value['id_product']);
      }
    } catch (PDOException $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }
  
  public function addCar($id_product = 0) {
    $rows = [];
    try {
      $sql = "SELECT * FROM products";
      $pdo = new connection();
      $pdo = $pdo->connect();
      if ($id_product) {
	$sql .= " WHERE id_product = '$id_product'";
      }
      $result = $pdo->query($sql);
      foreach ($result->fetchAll() as $value) {
	$rows [] = new Products_Model($value['name_product'], $value['id_categorie'], $value['price'], $value['quantity'], $value['description'], $value['id_product']);
      }
    } catch (PDOException $ex) {
      error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
    }
    return $rows;
  }
  /**
   * Get element - usually was used with 'id'
   * @param type $name
   * @return type
   */
  public function get_attribute($name) {
    try {
      return $this->$name;
    } catch (Exception $ex) {
      return NULL;
    }
  }

}

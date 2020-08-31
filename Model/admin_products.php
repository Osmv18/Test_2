<?php

/**
 * Description for the user
 *
 * @author Nicole
 */
require_once 'model/connection.php';
require_once 'model/admin_categories.php';

class products
{
    public $id_product;
    public $name_product;
    public $id_categorie;
    public $name_categorie;
    public $price;
    public $quantity;
    public $description;

    /**
     *
     * @param type $pname_product name of product
     * @param type $pid_categorie pass the fk to the products table 
     * @param type $pprice price of the product
     * @param type $pquiantity is the quantity of the product
     * @param type $pdescription descriptión of product
     * @param type $pid_product is table code
     */
    public function __construct($pname_product = "", $pid_categorie = "", $pprice = "", $pquantity = "", $pdescription = "", $pid_product = 0)
    {
        $this->id_product = $pid_product;
        $this->id_categorie = $pid_categorie;
        if ($pid_categorie <> "") {
            $name_categorie = new categories();
            $this->name_categorie = $name_categorie->read_categ($pid_categorie)[0];
        }
        $this->name_product = $pname_product;
        $this->price = $pprice;
        $this->quantity = $pquantity;
        $this->description = $pdescription;
    }

    /**
     * Create the information in the database
     * @return bool
     */
    public function create()
    {
        try {
            $sql = "INSERT INTO products (id_categorie, name_product, price, quantity, description)"
                . "VALUES ('$this->id_categorie', '$this->name_product', '$this->price', '$this->quantity', '$this->description')";

            echo $sql;
            $pdo = new connection();
            $pdo = $pdo->connect();
            return $pdo->query($sql);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }

    /**
     * Read the information from the products table in the database
     * @param type $id
     * @return /products
     */
    public function read($id = 0)
    {
        $rows = [];
        try {
            $sql = "SELECT * FROM products";
            $pdo = new connection();
            $pdo = $pdo->connect();

            if ($id) {
                $sql .= " WHERE id_product=" . $id;
            }
            $result = $pdo->query($sql);
            foreach ($result->fetchAll() as $value) {
                $rows [] = new products($value['name_product'], $value['id_categorie'], $value['price'], $value['quantity'], $value['description'], $value['id_product']);
            }
        } catch (PDOException $ex) {
            die ($ex->getMessage());
        }

        return $rows;
    }
    
    /**
     * Show the products of a category
     * @param type $id_categorie
     * @return /products
     */
    public function prod_categories($id_categorie = 0)
    {
        $rows = [];
        try {
            $sql = "SELECT * FROM products";
            $pdo = new connection();
            $pdo = $pdo->connect();
            if ($id_categorie) {
                $sql .= " WHERE id_categorie='$id_categorie'";
            }
            $result = $pdo->query($sql);
            foreach ($result->fetchAll() as $value) {
                $rows [] = new products($value['name_product'], $value['id_categorie'], $value['id_product']);
            }
        } catch (PDOException $ex) {
            die ($ex->getMessage());
        }

        return $rows;
    }

    /**
     * Delete information from the products table in the database
     * @param type $id
     * @return type query
     */
    public function delete($id = 0)
    {
        $id_product = ($id) ? $id : $this->id_product;
        $sql = "DELETE FROM products WHERE id_product = '$id_product'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }

    /**
     * Updates the information in the products table in the database
     * @return type query
     */
    public function update()
    {
        $sql = "UPDATE products SET name_product = '$this->name_product', id_categorie = '$this->id_categorie', price = '$this->price',"
            . " quantity='$this->quantity', description='$this->description' WHERE id_product='$this->id_product'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }

    /**
     * Take the information of a specific insert
     * @param type $id_product
     * @return type NULL
     */
    public function get_attribute($id_product)
    {
        try {
            return $this->$id_product;
        } catch (Exception $ex) {
            return NULL;
        }
    }
}




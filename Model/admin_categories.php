<?php

/**
 * Description for the user
 *
 * @author Nicole
 */
require_once 'model/connection.php';
class categories
{
    public $id_categorie;
    public $name_categorie;
    
    /**
     * 
     * @param type $pcategoria name of the categorie
     * @param type $pid_categoria is table code
     */   
    public function __construct($pname_categorie = "", $pid_categorie = 0)
    {
        $this->id_categorie = $pid_categorie;
        $this->name_categorie = $pname_categorie;
    }
    
    /**
     * Create the information in the database
     * @return type bool
     */    
    public function create_categ()
    {
        try {
            $sql = "INSERT INTO categories (id_categorie, name_categorie)"
                . "VALUES ('$this->id_categorie', '$this->name_categorie')";

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
     * @return \categories
     */ 
    public function read_categ($id = 0)
    {
        $rows = [];

        try {
            $sql = "SELECT * FROM categories";
            $pdo = new connection();
            $pdo = $pdo->connect();
            if ($id) {
                $sql .= " WHERE id_categorie='$id'";
            }
            $result = $pdo->query($sql);
            foreach ($result->fetchAll() as $value) {
                $rows [] = new categories($value['name_categorie'], $value['id_categorie']);
            }
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }

        return $rows;
    }
    
    /**
     * Delete information from the products table in the database
     * @param type $id
     * @return type query
     */   
    public function delete_categ($id = 0)
    {
        $id_categorie = ($id) ? $id : $this->id_categorie;
        $sql = "DELETE FROM categories WHERE id_categorie = 'id_categorie'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }
    
    /**
     * Updates the information in the products table in the database
     * @return type query
     */
    public function update_categ()
    {
        $sql = "UPDATE categories SET id_categorie = '$this->id_categorie', name_categorie = '$this->name_categorie' WHERE id_categorie='$this->id_categorie'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }
    
    /**
     * Take the information of a specific insert
     * @param type $id_categorie
     * @return type NULL
     */
    public function get_attribute($id_categorie)
    {
        try {
            return $this->$id_categorie;
        } catch (Exception $ex) {
            return NULL;
        }
    }
}



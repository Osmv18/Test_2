<?php

/**
 * Descripcion para el usuario
 *
 * @author Nicole
 */
require_once 'model/connection.php';

class users
{
    public $id_user;
    public $name;
    public $last_name;
    public $email;
    private $password;
    public $admin;

    /**
     *
     * @param type $pproducto nombre del producto
     * @param type $pid_categoria le pasa la fk a la tabla productos
     * @param type $pprecio es el precio del producto
     * @param type $pcantidad es la cantidad del producto
     * @param type $pdescripcion descripción del producto
     * @param type $pid_prod es codigo de la tabla
     */
    public function __construct($pname = "", $plast_name = "", $pemail = "", $ppassword = "", $padmin = false, $pid_user = 0)
    {
        $this->id_user = $pid_user;
        $this->name = $pname;
        $this->last_name = $plast_name;
        $this->email = $pemail;
        $this->password = $ppassword;
        $this->admin = $padmin;
    }

    /**
     * Crea la información en la base de datos
     * @return bool
     */
    public function create()
    {
        try {
            $sql = "INSERT INTO usuarios (name, last_name, email, password, admin)"
                . "VALUES ('$this->name', '$this->last_name', '$this->email', '$this->password', '$this->admin')";
            $pdo = new connection();
            $pdo = $pdo->connect();
            return $pdo->query($sql);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }

    }

    /**
     * Lee la información de la tabla productos en la base de datos
     * @param type $id
     * @return \producto
     */
    public function read($id = 0)
    {
        $rows = []; // Donde voy a almacenar mis registros en base de datos
        try {
            $sql = "SELECT * FROM usuarios";
            $pdo = new connection();
            $pdo = $pdo->connect();
            // Si id != 0  devuelve uno en especifico
            if ($id) {
                $sql .= " WHERE id_user=" . $id;
            }
            $result = $pdo->query($sql);
            /*
             * Se recorre mientras tengamos una condicion verdadera
             * Fetch me devuelve el ultimo registro, cuando vuelve a ejecutarse el arreglo ya tiene un elemento menos
             * devolviendo un elemento diferente
             * while ($row  = $result->fetch()){
             * }
             */
            foreach ($result->fetchAll() as $value) {
                $rows [] = new producto($value['name'], $value['last_name'], $value['email'], $value['password'], $value['adimin'], $value['id_user']);
            }
        } catch (PDOException $ex) {
            die ($ex->getMessage());
        }

        return $rows;
    }
    
     public function userExists($email, $password){  
        $rows = [];
        
        try{
           $sql = "SELECT * FROM users WHERE email = '$email'and password = '$password'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        $var = $pdo->query($sql);
        
        foreach ($var->fetchAll() as $value) {
                $rows [] = new users($value['name'], $value['last_name'], $value['email'], $value['password'], $value['admin'], $value['id_user']);
            }
  
        } catch (PDOException $ex) {
            die ($ex->getMessage());
        }
        
        return $rows;
  }
  
  
}
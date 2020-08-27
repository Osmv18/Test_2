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
    
    /**
     * Elimina información de la tabla productos en la base de datos
     * @param type $id
     * @return type query
     */
    public function delete($id = 0)
    {
        $id_user = ($id) ? $id : $this->id_user;
        $sql = "DELETE FROM usuarios WHERE id_user = '$id_user'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }

    /**
     * Actualiza la información de la tabla productos en la base de datos
     * @return type query
     */
    public function update()
    {
        $sql = "UPDATE usuarios SET name = '$this->name', last_name = '$this->last_name',"
            . " email='$this->email', password='$this->password' WHERE id_user='$this->id_user'";
        $pdo = new connection();
        $pdo = $pdo->connect();
        return $pdo->query($sql);
    }

    /**
     * Toma la información de un insert en especifico
     * @param type $id_prod
     * @return type nulo
     */
    public function get_attribute($id_prod)
    {
        try {
            return $this->$id_prod;
        } catch (Exception $ex) {
            return NULL;
        }
    }
}




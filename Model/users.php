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
     * @param type $pname displays the user's name
     * @param type $plast_name displays the user's last name
     * @param type $pemail user's email
     * @param type $ppassword user's password
     * @param type $padmin admin user
     * @param type $pid_user is table code
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
     * Create the information in the database
     * @return bool
     */
    public function create()
    {
      try{
	$sql = "INSERT INTO usuarios (name, last_name, email, password, admin)"
	    . "VALUES ('$this->name', '$this->last_name', '$this->email', '$this->password', '$this->admin')";
	$pdo = new connection();
	$pdo = $pdo->connect();
	return $pdo->query($sql);
      } catch (PDOException $ex) {
	 error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
      }

    }

    /**
     * Read the information from the products table in the database
     * @param type $id
     * @return \products
     */
    public function read($id = 0)
    {
        $rows = [];
        try {
            $sql = "SELECT * FROM usuarios";
            $pdo = new connection();
            $pdo = $pdo->connect();
            if ($id) {
                $sql .= " WHERE id_user=" . $id;
            }
            $result = $pdo->query($sql);
            foreach ($result->fetchAll() as $value) {
                $rows [] = new products($value['name'], $value['last_name'], $value['email'], $value['password'], $value['adimin'], $value['id_user']);
            }
        } catch (PDOException $ex) {
             error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
        }

        return $rows;
    }
    
    /**
     * Validate that the user exists
     * @param type $email
     * @param type $password
     * @return \users
     */
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
             error_log("Error en la funcion" . __FUNCTION__ . " en el archivo" . __FILE__ . " con el error " . $ex->getMessage());
        }
        
        return $rows;
  }
  
  
}
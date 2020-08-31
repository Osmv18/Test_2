<?php
include 'model/users.php';
if ($_POST) {
  $register = new users($_POST['name'], $_POST['last_name'], $_POST['email'], $_POST['password']);
  $register->create();
  include 'Controller/controller_Send_Email.php';
}

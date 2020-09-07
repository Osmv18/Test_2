<?php

session_abort();
include 'Model/users.php';
session_start();
$exists = new users();
$users = $exists->userExists($_POST['email'], $_POST['password']);
if (empty($users)) {
  include 'Views/view_incorrect.php';
} else {
  $data = (array) $users;
  $_SESSION["user"] = (array) $data[0];
  if ($_SESSION["user"]["admin"] == '1') {
    include 'Controller/controller_principal_admin.php';
  } else if ($_SESSION["user"]["admin"] == '0') {
    include 'Views/home.php';
  }
}



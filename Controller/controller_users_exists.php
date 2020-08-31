<?php
include 'model/users.php';
$exists = new users();
$admin = false;
$users = $exists->userExists($_POST['email'], $_POST['password']);
foreach ($users as $rol){
  if($rol->admin == true){
    $admin = true;
  }
}
if(empty($users)== false){
    if($admin == true){
     
      include 'Controller/controller_principal_admin.php';
    }else{
      include 'Views/home.php';
    }
}else{
  include 'Views/view_incorrect.php';
}

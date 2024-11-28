<?php
session_start();
if (isset($_SESSION['login'])) {
  $user_name = $_SESSION['name'];
  $user_id = $_SESSION['userid'];

  include 'dbcon.php';
  $obj = new dbcon('doot');
} else {
  header("location:/doot/register/login.php");
}

if ($_POST['work']=='satatus_change') {
   $status_val= $_POST['val'];
   $change=$obj->update("user_main_dta",["online_status"=>"$status_val"],"userid='$user_id'");
    if ($change) {
       echo $status_val;
    }else{
        echo false;
    }
}elseif ($_POST['work']=="data-update") {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $about=$_POST['about'];
$changed=$obj->update("user_data",["name"=>"$name","email"=>"$email"],"userid='$user_id'");
$about_update=$obj->update("user_main_dta",["about"=>"$about"],"userid='$user_id'");
  
if($changed && $about_update){
  echo true;
}else{
  echo false;
}
}
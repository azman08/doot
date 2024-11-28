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

if ($_POST['work']=="contact_profile") {
  $contact_id= $_POST['contact_id'];

  $user_data=$obj->select("user_data","name,email,mobile,online_check","userid='$contact_id'");
  $data= $obj->show_result();
  $user_about=$obj->select("user_main_dta","about,online_status,profile_photo","userid='$contact_id'");
  $about_data= $obj->show_result();
  $user_about=$obj->select("user_contacts","favourite","contact_id='$contact_id' AND userid='$user_id'");
  $fav_data= $obj->show_result();
  
  echo json_encode(array_merge($data,$about_data,$fav_data));

}
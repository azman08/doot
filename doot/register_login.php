<?php
include "./dbcon.php";
$obj = new register("doot");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$success = "";
if ($_POST["work"] == "register") {

  $name = test_input($_POST['full_name']);
  $mail = test_input($_POST['mail']);
  $mobile = test_input($_POST['mobile']);
  $password = $_POST['password'];
  $secure_pass = password_hash($password, PASSWORD_DEFAULT);


  $ac_exist_mail =  $obj->ac_exists("user_data", "email='$mail'");
  $ac_exist_mobile =  $obj->ac_exists("user_data", "mobile='$mobile'");

  if ($ac_exist_mail && $ac_exist_mobile) {
    $register = $obj->register("user_data", ["name" => "$name", "email" => "$mail", "mobile" => "$mobile", "password" => "$secure_pass"]);
    if ($register) {
      $userid=$obj->single_data("user_data","userid","mobile='$mobile'");
        $added=$obj->insert("user_main_dta",["userid"=>"$userid"]);
    if($added){
      $logged = $obj->login("user_data", $mail, "email", $password);
      if ($logged) {
        $success = 'true';
      }}
    }
  } else {
    $success = "false";
  }
}

if ($_POST["work"] == "login") {
  $login_data = test_input($_POST['login_data']);
  $login_password = $_POST['login_pass'];
  $login_type = test_input($_POST['login_type']);

  if ($login_type == "email") {
    $ac_exist = $obj->ac_exists("user_data", "email='$login_data'");
  } elseif ($login_type == "mobile") {
    $ac_exist = $obj->ac_exists("user_data", "mobile='$login_data'");
  }

  if ($ac_exist) {
    $success = "false";
  } else {
    $logged = $obj->login("user_data", $login_data, $login_type, $login_password);
    if ($logged) {
      $user_id = $_SESSION['userid'];
      $obj->update("user_data",["online_check"=>1],"userid='$user_id'");
      $success = "true";
    } else {
      $success = 'pass_incorrect';
    }
  }
}
echo $success;
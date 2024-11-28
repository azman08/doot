<?php

session_start();
if (isset($_SESSION['login'])) {
  $user_id = $_SESSION['userid'];
} else {
  header("location:/doot/register/login.php");
}
include './dbcon.php';
$obj=new register('doot');
$last_time=$_POST['last'];
$contact_id=$_POST['contact_id'];
$data=$obj->select("chat","CURRENT_TIMESTAMP() > '$last_ime' And receiver_userid='$contact_id' And sender_userid='$user_id'");
if ($data) {
  $all_data=$obj->show_result();
}
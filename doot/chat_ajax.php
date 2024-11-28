<?php
session_start();
if (isset($_SESSION['login'])) {
  $user_name = $_SESSION['name'];
  $user_id = $_SESSION['userid'];
} else {
  header("location:/doot/register/login.php");
}
include "./dbcon.php";
$obj=new dbcon("doot");

if ($_POST['work']=="conatct_update"){
$contact_id=$_POST['contact_id'];

$online_check=$obj->single_data("user_data","online_check","userid='$contact_id'");
$contact_name=$obj->single_data("user_contacts","contact_name","userid='$user_id' && contact_id='$contact_id'");
$contact_profile=$obj->single_data("user_main_dta","profile_photo","userid='$contact_id'");
$contact_online_status=$obj->single_data("user_main_dta","online_status","userid='$contact_id'");
$contact_last_seen=$obj->single_data("logout_history","logout_time","userid=$contact_id");

$data=["userid"=>"$user_id","online_check"=>"$online_check","contact_name"=>"$contact_name","contact_profile"=>"$contact_profile","contact_id"=>"$contact_id","contact_online_status"=>"$contact_online_status","contact_last_seen"=>"$contact_last_seen"];
$contact_data=json_encode($data);
echo $contact_data;

}
if ($_POST['work']=="msg_send") {
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  $massege=test_input($_POST['massege']);
  // $msgs=mysql_real_escape_string();
  $receiver_id=$_POST['contact_id'];  
  $profile=$obj->single_data("user_main_dta","profile_photo","userid='$receiver_id'");
 $send= $obj->insert("chat",["sender_userid"=>"$user_id","receiver_userid"=>"$receiver_id","message_text"=>"$massege"]);
   if($send){
    $dta=["userid"=>"$user_id","contact_id"=>"$receiver_id","profile"=>"$profile"];
    echo json_encode($dta);
   }
   
}if ($_POST['work']=="chat_get") {
     $receiver= $_POST['contact_id'];
     $msgs=$obj->select("chat","*","(sender_userid=$user_id AND receiver_userid='$receiver') OR (receiver_userid='$user_id' AND sender_userid='$receiver')");
     if ($msgs) {
        $data=$obj->show_result();
        echo json_encode($data);
     }else{
      $daa=[["err"=>"nodata"]];
      echo json_encode($daa);
     }
     
}
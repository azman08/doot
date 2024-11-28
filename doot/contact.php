<?php

session_start();
if (isset($_SESSION['login'])) {
  $user_id = $_SESSION['userid'];
} else {
  header("location:/doot/register/login.php");
}
include './dbcon.php';
$obj=new register('doot');
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if ($_POST['work']=="get_contact") {
    $contact_short=$_POST['contact_short'];
    
    // $sql="SELECT `contact_id`, `contact_name` FROM `user_contacts` Where `userid`=12  And `contact_name` Like '$contact_short%' ORDER BY `contact_name`";

      $sql="SELECT user_contacts.contact_id ,user_contacts.contact_name,user_main_dta.profile_photo FROM `user_contacts` RIGHT JOIN `user_main_dta` ON user_contacts.contact_id=user_main_dta.userid WHERE user_contacts.userid=$user_id AND user_contacts.contact_name LIKE '$contact_short%' ORDER BY user_contacts.contact_name";
      
      $data=$obj->new_query($sql);
 
   if(mysqli_num_rows($data)>0){
     $all_contact=$data->fetch_all(MYSQLI_ASSOC);
        $json=json_encode($all_contact); 
       echo $json;
      }else{
      echo json_encode(array(["error"=>false]));
    }

}else if ($_POST['work']=="contact_check") {
  $mobile=test_input($_POST['contact_mobile']);

 $ac_check=$obj->ac_exists("user_data","mobile='$mobile'");
  if ($ac_check) {
  echo false;
  }else{
    echo true;
  }
}else if ($_POST['work']=="add_contact") {
  $contact_name=test_input($_POST['contact_name']);
  $mobile=test_input($_POST['contact_mobile']);
  $contact_id=$obj->single_data("user_data","userid","mobile='$mobile'");
 
 $added= $obj->insert("user_contacts",["userid"=>"$user_id","contact_id"=>"$contact_id","contact_name"=>"$contact_name"]);
 if ($added) {
// echo $contact_name." ".$mobile." ".$contact_id;
}
}
<?php

require_once ('../gabai-database.php');
$userdetails = $gabai->get_userdata();
$gabai->add_note();
$note = $gabai->get_user_notes($id);
$id = $_GET[$userdetails['id']];
$getid = $gabai->user_id($id);

if(isset($userdetails)){
  if(($userdetails['access'] != "user")){
      echo '<script type="text/javascript">';
      echo ' alert("Cannot Log-in as Admin need to be User")';  //not showing an alert box.
      echo '</script>';
      
  }
} else {
      header("Location: ../Homepage.php");
}


?>
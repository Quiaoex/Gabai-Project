<?php

    require_once './gabai-database.php';
    $userdetails = $gabai->get_userdata();

    if(isset($userdetails)){
        if(($userdetails) > 0){
            header("Location: ./User-UI/user-homepage.php");
        }
    } else {
        
    }
?>
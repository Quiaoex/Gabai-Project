<?php
        session_start();

        // connect to the database
        $db = mysqli_connect("localhost","root","","gabai_database");

        if(!$db){
            die("connection error...".mysqli_connect_error());
        }else{
            echo "You are successfully connected.";
        }
        
        if(isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
            $firstname=$_POST['inputFirstName'];
            $lastname=$_POST['inputLastName'];
            $email=$_POST['inputEmail'];
            $password=$_POST['inputLastName'];
            
        $temp = mysqli_query($db,"INSERT INTO admin_user (first_name,last_name,admin_email,admin_password) 
        VALUES ('$firstname','$lastname','$email','$password')");
        
        if(!$temp){
            echo "error";
        }else{
            echo "Your registration is done.";
        }
        }
    ?>
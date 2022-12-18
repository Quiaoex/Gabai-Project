<?php
    session_start();

    // connect to the database
    $db = mysqli_connect("localhost","root","","gabai_database");
    

    if(!$db){
        die("connection error...".mysqli_connect_error());
    }else{
        
    }
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $id = 1;    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if  ($firstname == "" && $lastname=="" && $email == "" && $password == ""){
            function function_alert($message) {
                echo "<script>alert('$message');</script>";

                function_alert("Fields Cannot Be Empty");
            }
        }
      else{  
    $temp = mysqli_query($db,"INSERT INTO user_cred (id,user_firstname,user_lastname,user_email,user_password) 
    VALUES (NULL,'$firstname','$lastname','$email','$password')");
    
    if(isset($_POST['submit'])){
        header("Location: ./Homepage.php");
        
    }else {
        
    }
    }
}
?>
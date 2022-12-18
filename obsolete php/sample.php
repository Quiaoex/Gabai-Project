<?php
    session_start();

    // connect to the database
    $db = mysqli_connect("localhost","root","","gabai_database");

    if(!$db){
        die("connection error...".mysqli_connect_error());
    }else{
        echo "You are successfully connected.";
    }
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $id = 1;    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
    $temp = mysqli_query($db,"INSERT INTO admin_user (id,first_name,last_name,admin_email,admin_password) 
    VALUES (NULL,'$firstname','$lastname','$email','$password')");
    
    if(!$temp){
        echo "error";
    }else{
        echo "Your registration is done.";
    }
    }
?>

<html>
<head>
<title>Registration</title>
</head>
<body>
<div class="container">
      <form class="form-signin" method="POST" name="registration">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Firstname</span>
	        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Firstname" required>
	    </div>
        <div class="input-group">
	        <span class="input-group-addon" id="basic-addon1">Lastname</span>
	        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Lastname" required>
	    </div>
        <label for="inputEmail" class="sr-only">Email ID</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
        <br>
        <input name="submit" type="submit" value="Register" />
        <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
      </form>
</div>
</body>
</html>
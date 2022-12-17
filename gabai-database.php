<?php

Class Gabai {

    private $server = "mysql:host=localhost;dbname=gabai_database";
    private $user = "root";
    private $pass = "";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    protected $con;


    public function openConnection()
    {
        try
        {

            $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
            return $this->con;

        }
        catch (PDOException $e)
        {
            echo "There is some problem Connecting to the Database:". $e->getMessage();
        }
    }

    public function closeConnection()
    {
        $this->con = null;
    }

    public function admin_login()
    {
        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = md5($_POST['password']);
            

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM admin_user WHERE admin_email = ? AND admin_password = ? ");
        $stmt->execute([$email,$password]);
        $user = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0){
            echo '<script type="text/javascript">';
            echo ' alert("Log in Success")';  //not showing an alert box.
            echo '</script>';
            header('Location: ../Admin-UI/admin-homepage.php');
        } else {
            echo '<script type="text/javascript">';
            echo ' alert("Log in Failed")';  //not showing an alert box.
            echo '</script>';
        }



        }
    }

    public function check_email_exist($email)
    {
        $email = $_POST['email'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM admin_user WHERE admin_email = ?");
        $stmt->execute([$email,]);
        $total = $stmt->rowCount();

        return $total;
    }


    public function admin_register()
    {   
        if(isset($_POST['register'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);


        if($this->check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO admin_user(`first_name`,`last_name`,`admin_email`,`admin_password`)
            VALUE (?,?,?,?)");
            $stmt->execute([$fname,$lname,$email,$password]);
            }else {
                echo '<script type="text/javascript">';
                echo ' alert("Email already taken.")';  //not showing an alert box.
                echo '</script>';
            }
        }

    }
    

} 

$gabai = new Gabai();

?>
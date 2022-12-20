<?php

Class Gabai {

    private $server = "mysql:host=localhost; dbname=gabai_database";
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

    public function show_404()
    {

            http_response_code(404);
            echo "Page not Found";
            die;

    }

    public function set_userdata($array)
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['userdata'] = array(
                "id"=> $array['user_id'],"uid"=> $array['unique_user_id'],
                "fullname" => $array['first_name']." ".$array['last_name'],
                "access" => $array['access'],
                "groupid" => $array['grp_unique_ids']
        );

        return $_SESSION['userdata'];
    }


    public function get_userdata()
    {
        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION['userdata'])){
           return $_SESSION['userdata'];
        } else {
            return null;
        }

        
    }

    public function log_out()
    {
        if(!isset($_SESSION)){
            session_start();
        }

        $_SESSION['userdata'] = null;
        unset($_SESSION['userdata']);
    }


    public function check_email_exist($email)
    {
        $email = $_POST['email'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ?");
        $stmt->execute([$email,]);
        $total = $stmt->rowCount();

        return $total;
    }

    public function admin_login()
    {
        if(isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $access = 'admin';
            

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ? AND password = ? AND access = ?");
        $stmt->execute([$email,$password,$access]);
        $user = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0){
            echo '<script type="text/javascript">';
            echo ' alert("Log in Success")';  //not showing an alert box.
            echo '</script>';
            $this->set_userdata($user);
            header('Location: ../Admin-UI/admin-homepage.php');

        } else {
            echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                       <strong> Log in Failed!</strong></div>";
        }
        }
    }

    public function admin_register()
    {   
        if(isset($_POST['register'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $cnfirm = md5($_POST['confirm']);
            $access = "admin";


            if($password !== $cnfirm ){
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                        Password is mismatched!</div>";

            }else{
            if($this->check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO gabai_user (`first_name`,`last_name`,`email`,`password`,`access`)
            VALUE (?,?,?,?,?)");
            $stmt->execute([$fname,$lname,$email,$password,$access]);
            header('Location: ../Admin-UI/admin-success-register.php');

            }else {
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                        Email has already been taken!</div>";
            }
        }
        }
    }

    public function user_login()
    {
        if(isset($_POST['login'])){

            $email = $_POST['user-email'];
            $password = md5($_POST['user-password']);
            $access = 'user';
            

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ? AND password = ? AND access = ?");
        $stmt->execute([$email,$password,$access]);
        $user = $stmt->fetch();
        $total = $stmt->rowCount();

        if($total > 0){
            echo '<script type="text/javascript">';
            echo ' alert("Log in Success")';  //not showing an alert box.
            echo '</script>';
            $this->set_userdata($user);
            header('Location: ./User-UI/user-homepage.php');

        } else {
            echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                    <strong> Log in Failed!</strong></div>";;
        }
        }
    } 

    public function user_check_email_exist($email)
    {
        $email = $_POST['email'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE email = ?");
        $stmt->execute([$email,]);
        $total = $stmt->rowCount();

        return $total;
    }


    public function user_register()
    {   
        if(isset($_POST['register'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $confirm = md5($_POST['confirm']);
            $access = "user";

            if( empty($fname) && empty($lname) && empty($email) && empty($password)&& empty($confirm)){
                    echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                    <strong> Cannot be Empty!</strong></div>";

            }else   {
            if($password !== $confirm ){
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                    <strong> Password is not Matched</strong></div>";

            }else{
            if($this->user_check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO gabai_user(`first_name`,`last_name`,`email`,`password`,`access`)
            VALUE (?,?,?,?,?)");
            $stmt->execute([$fname,$lname,$email,$password,$access]);
                echo '<script type="text/javascript">';
                echo ' alert("Succesfully Register.")';  //not showing an alert box.
                echo '</script>';

            }else {
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                       <strong> Email already Taken!</strong></div>";
            }
        }
        }
        }
    }


    public function add_note()
    {

        if(isset($_POST['add'])){


            $noteid = $_POST['id'];
            $types = $_POST['note_type'];
            $notetitle = $_POST['notetitle'];
            $notedata = $_POST['notebody'];
            $created = $_POST['created-by'];
            
            if(($types > 0 && $notetitle > 0 && $notedata > 0)){
                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO user_data_notes (`note_id`,`note_type`,`note_title`,`note_body`,`created_by`)
                VALUE (?,?,?,?,?)");
                $stmt->execute([$noteid,$types,$notetitle,$notedata,$created]);

            }else {
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                       <strong> Cannot be Empty!</strong></div>";;
                
            }
        
    }
    }

    public function get_user_notes($id)
    {


        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT user_id, note_id, note_title , note_body , created_by FROM 
        (SELECT * FROM gabai_user WHERE gabai_user.user_id = ?) t1 INNER JOIN gabai_user_notes t2 ON t1.user_id = t2.note_id"); 
        $stmt->execute([$id]);
        $groups = $stmt->fetchAll();
        $total = $stmt->rowCount();

        if($total > 0){
            return $groups;
        }else {
            return $this->show_404();
        }

    }

    public function get_grp_notes($grpid)
    {



        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT grp_unique_ids ,first_name,last_name ,group_name,group_id, grp_unique_id, group_name_id ,member_unique_id,member_unique_id ,
        group_note_title, group_note_body, created_by FROM
        (SELECT * FROM gabai_user WHERE gabai_user.grp_unique_ids = ? ) t1 
        INNER JOIN gabai_group t2 ON t1.grp_unique_ids = t2.grp_unique_id 
        INNER JOIN gabai_group_notes t3 ON t2.grp_unique_id = t3.member_unique_id"); 
        $stmt->execute([$grpid]);
        $notes = $stmt->fetchall();
        $total = $stmt->rowCount();

        if($total > 0){
            return $notes;
        }else {
            return $this->show_404();
        }
    }

    public function add_group_note()
    {

        if(isset($_POST['add-group-note'])){


            $noteid = $_POST['id'];
            $types = $_POST['note_type'];
            $notetitle = $_POST['groupnotetitle'];
            $notedata = $_POST['groupnotebody'];
            $created = $_POST['created-by'];
            
            if(($notetitle > 0 && $notedata > 0)){
                $connection = $this->openConnection();
                $stmt = $connection->prepare("INSERT INTO gabai_group_notes (`note_id`,`note_type`,`note_title`,`note_body`,`created_by`)
                VALUE (?,?,?,?,?)");
                $stmt->execute([$noteid,$types,$notetitle,$notedata,$created]);

            }else {
                echo '<script type="text/javascript">';
                echo ' alert("Cannot be Empty.")';  //not showing an alert box.
                echo '</script>';
                
            }
        }
    }
    
    public function get_users()
    {   
        $access = 'user';

        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM gabai_user WHERE access = ? "  );
        $stmt->execute([$access]);
        $users = $stmt->fetchAll();
        $total = $stmt->rowCount();

        if($total > 0){
            return $users;
        } else {
            
        }

    }

    public function delete_user()
    {
        if(isset($_POST['delete'])){

        $id = $_POST['delete_id'];

        $connection = $this->openConnection();
        $stmt = $connection->prepare("DELETE FROM gabai_user WHERE user_id = ? ");
        $stmt->execute([$id]);
        $stmt->rowCount();

        header("Location: ../Admin-UI/admin-homepage.php");
    }
   
    }

    public function add_user()
    {   
        if(isset($_POST['register'])){
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $cnfirm = md5($_POST['confirm']);
            $access = $_POST['access'];


            if($password !== $cnfirm ){
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                        Password is mismatched!</div>";

            }else{
            if($this->check_email_exist($email) == 0){
            $connection = $this->openConnection();
            $stmt = $connection->prepare("INSERT INTO gabai_user (`first_name`,`last_name`,`email`,`password`,`access`)
            VALUE (?,?,?,?,?)");
            $stmt->execute([$fname,$lname,$email,$password,$access]);
            header('Location: ../Admin-UI/admin-success-register.php');

            }else {
                echo "<div class='alert alert-danger justify-content-center' style='text-align: center;' role='alert'>
                        Email has already been taken!</div>";
            }
        }
        }
    }

    public function make_report()
    {
        if(isset($_POST['make_report'])){

        $connection = $this->openConnection();
        $stmt = $connection->query("SELECT * FROM gabai_user "  );
        $users = $stmt->fetchAll();
        $total = $stmt->rowCount();
        $filename = 'users.xls';

        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=$filename");  
        header("Pragma: no-cache"); 
        header("Expires: 0");
        $separator = "\t";

        if (!empty($total)){
        
        echo implode($separator, array_keys($users[0])) . "\n";
        foreach($users as $users){
        
            //Clean the data and remove any special characters that might conflict
            foreach($users as $k => $v){
                $users[$k] = str_replace($separator . "$", "", $users[$k]);
                $users[$k] = preg_replace("/\r\n|\n\r|\n|\r/", " ", $users[$k]);
                $users[$k] = trim($users[$k]);
            }
            
            //Implode and print the columns out using the 
            //$separator as the glue parameter
            echo implode($separator, $users) . "\n";  

            

        }
        }

    }
    }
}

$gabai = new Gabai();

?>
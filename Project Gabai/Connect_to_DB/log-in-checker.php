
<?php
    $username = "input-email";
    $password = "input-password";
    require_once '../Connect_to_DB/connect.php';
    $sql = "SELECT admin_email, admin_password FROM admin_user WHERE admin_email=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['admin_password'])) {
            $message = "ok";
            // header must be called before any other output
            header("Location: ./admin-login.php");
            exit();
        }
    }
    $message = "No";
    // header must be called before any other output
    header("Location: ./admin-login.php");

    
?>
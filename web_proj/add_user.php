<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['First_Name'];
    $last_name = $_POST['Last_Name'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $confirm_password = $_POST['Confirm_Password'];
    $user_type = $_POST['User_Type'];

   
    $stmt = $conn->prepare('INSERT INTO user_accounts (First_Name, Last_Name, Email, Password, User_Type) VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$first_name, $last_name, $email, $password, $user_type]);

    header("Location: pages/home/home.php"); 
    exit();
}
?>

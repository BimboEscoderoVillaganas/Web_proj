<?php
require_once 'connection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve values from the form
    $Email = $_POST['Email'];
    $password = $_POST['Password'];

    // Query to retrieve the user's password hash from the 'user_accounts' table
    $stmt = $conn->prepare('SELECT count(Employee_ID) as countedUsers, Employee_ID FROM user_accounts WHERE Email=? and Password=?');
    $stmt->execute([$Email, $password]);
    $result = $stmt->fetch();

    if ($result['countedUsers'] > 0) {
        $_SESSION['Employee_ID'] = $result['Employee_ID'];
        echo 'Login Success';
    } else {
        echo 'Login Failed';
    }
    
    // Close the session
    session_destroy();
}
?>

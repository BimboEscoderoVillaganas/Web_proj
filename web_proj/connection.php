<?php
 $servername = "localhost";
    $username = "root";
    $password = "20201259";
    $dbname = "ims";

    Try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        Echo "Connection failed: " . $e->getMessage();
    }
?>
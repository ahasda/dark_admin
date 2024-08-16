<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'litem_fee') or die();

// if ($con->connect_errno) {
//     die("Failed to connect to MySQL: " . $con->connect_error);
// }
    $name = $con->real_escape_string($_POST['user_name']);
    $pass = $con->real_escape_string($_POST['password']);

    $query = $con->prepare("SELECT * FROM `admin` WHERE email = ? AND pass = ?");
    $query->bind_param("ss", $name, $pass);
    $query->execute();
    $result = $query->get_result();

    if ($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['pass'] = $row['pass'];
        echo "Welcome to Admin Dashboard 😄";
    } 
    
    // else {
    //     echo "Please check your password 🙄";
    // }

    $query->close();
    $con->close();

?>

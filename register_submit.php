<?php
require_once('db_connection.php');
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username','$email' ,  '$password')";

    if ($conn->query($sql) === TRUE) {
        header('location:register.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn_error;
        header('location:register.php');
    }
    $conn->close();
}

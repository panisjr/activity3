<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "register_account";

//We are going to create a connection to database

$conn = new mysqli($servername, $username, $password, $database);

//Were going to check the connection

if ($conn->connect_error) {
    die('Connection Failed:' . $conn->connect_error);
}
//Here we are going to create to access the database such as INSERT
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, email, password)
                VALUES ('$username','$email' ,  '$password')";

    if ($conn->query($sql) === TRUE) {
        $message = "You have successfully registered an account!";
        echo '<script type="text/javascript">alert("' . $message . '");</script>';
        // header('location:register.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn_error;
    }
    $conn->close();
}

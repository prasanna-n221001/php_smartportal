<?php
include "database.php";
if(isset($_POST['username'],
$_POST['email'],$_POST['password'],
$_POST['phoneno'])){

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];
$phoneno  = $_POST['phoneno'];

$query    = "INSERT INTO users (username, email, password, phoneno)
             VALUES ('$username', '$email', '$password', '$phoneno')";

if (mysqli_query($conn, $query)) {
    echo "Registration Successful";
} else {
    echo "Error occurred";
}
}
?>
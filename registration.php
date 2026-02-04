<?php
include "database.php";
if(isset($_POST['username'],
$_POST['email'],$_POST['password'],
$_POST['phoneno'])){

$username=$_POST['username'];
$username = trim($_POST['username']);
$username=ucwords($name);
$username=strtolower($_POST['username']);
$email    = $_POST['email'];
$password = trim($_POST['password']);
$phoneno  = $_POST['phoneno'];
if (strlen($username)>30){
    die("username length must not exceed 30 characters ");
}

if(strlen($password)<10){
    die("password must be at least 10 characters ");
}
$query    = "INSERT INTO users (username, email, password, phoneno)
             VALUES ('$username', '$email', '$password', '$phoneno')";

if (mysqli_query($conn, $query)) {
    echo "Registration Successful";
} else {
    echo "Error occurred";
}
}
?>
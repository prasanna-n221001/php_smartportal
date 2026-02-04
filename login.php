<?php
include "database.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    echo "Login Successful ";
} else {
    print "Invalid Email or Password ";
}
?>
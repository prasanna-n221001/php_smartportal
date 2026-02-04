<?php
$exuser="   anjali prasanna   ";
$expassword="anjali123";
$s="<h1>hello</h1>";
$p="i'm prasanna";
if(isset($_POST['username']) && isset($_POST['password'])){
    $username= $_POST['username'];
    $password=$_POST['password'];
} 
echo "Username: " . $username . "<br>";
echo "Length of username: " . strlen($username) . "<br>";
echo "word count:". str_word_count($exuser). "<br>";
echo "reverse of username:".strrev($username)."<br>";
echo "username is converted to uppercase letters:".strtoupper($username)."<br>";
echo "password is converted to lowercase letters:".strtolower($expassword)."<br>";
echo "frist character of password is converted to capital letter:".ucfirst($password)."<br>";
echo "first character in example username to capital letter:".ucwords($exuser)."<br>";
echo "search @ in password".strpos($password,"@")."<br>";
echo "replace space with _ in example user:".str_replace(" ","_",$exuser)."<br>";
echo "serach and repalce a character in example username:".str_replace("a","@",$exuser)."<br>";
echo "substring in password".substr($password,0,7)."<br>";
echo "trimming white spaces".trim($exuser)."<br>";
echo "trimming left white spaces".ltrim($exuser)."<br>";   
echo "trimming right white spaces".rtrim($exuser)."<br>";
echo "comparing example user and username:".strcmp($exuser,$username)."<br>";
echo "comparing two string case insensitive:".strcasecmp($exuser,$username)."<br>";
echo "converting special html characters into safe html entites:".htmlspecialchars($s)."<br>";
echo "adds backslashes:".addslashes($p)."<br>";

?>
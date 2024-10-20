<?php

require_once('dbcon.php');
require_once('User.php');

$username=$_POST["username"];
$password=$_POST["password"];
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$matiere=$_POST["Matiere"];
$email=$_POST["email"];
$category=$_POST["category"];

$user= new User($db);
$register =$user->register($username,$password,$firstname,$lastname,$email,$matiere,$category);
if($register ){
echo "NEW USER ADDED SUCESSUFULY";

}
else $user->getError();
?>
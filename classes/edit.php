<?php $id=$_GET['id'];
$firstname=$_POST["firstname"];


$req=mysqli_query($db,"update users set id=$id ,nom=$firstname,prenom=$lastname,Matiere=$matiere,email=$email,category=$category");
$result=mysqli_query($db,$req);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="cssprofil/style.css">
  <link rel="stylesheet" href="cssprofil/output.css">

</head>
<body class="">
  <?php 
  require "profilclass.php";
  require 'dbcon.php';
 
profil::hederprofil();
profil::edituser();



?>
  ?>
  
</body>
</html>













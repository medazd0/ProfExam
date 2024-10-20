<?php
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>Registration</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="cssprofil/style.css">
  <link rel="stylesheet" href="cssprofil/output.css">
  <link rel="stylesheet" href="cssprofil/stylepro.css">

  
</head>
<body >
 
  <?php 

  require "profilclass.php";
   profil::hederprofil();
   profil::detailuser();
  ?>
</body>


  

</html>
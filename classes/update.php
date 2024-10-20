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
  require "User.php";
  require_once('dbcon.php');
profil::hederprofil();
profil::edituser();
if(isset($_POST['update']))
		{

		$name=$_POST['firstname'];
		$email=$_POST['email'];
	 $uid=$_GET['id'];
        
       
     
        
		}
?>


  
</body>
</html>







        

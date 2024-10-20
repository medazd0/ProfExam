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

</head>
<body class="">
  <?php 
require "profilclass.php";
require 'dbcon.php';
  profil::table();
$req=mysqli_query($db,"SELECT * FROM users");
if(mysqli_num_rows($req)==0){
  echo "aucun utilisateur";
  echo '<br>';  echo '<br>';
 
}
else {
  while($row=mysqli_fetch_assoc($req)){
    
?>
<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600  ">
               
               <th scope="row" class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                 <?php echo $row['nom']?>
               </th>
               <td class="px-2 py-2">
               <?php echo $row['prenom']?>
               </td>
               <td class="px-2 py-2">
               <?php echo $row['username']?>
               </td>
               
               <td class="px-3 py-3">
               <?php echo $row['email']?>
               </td>
               <td class="px-2 py-2">
               <?php echo $row['category']?>
               </td>
             
             
               <td class="flex items-center px-1 py-1">
                    <a href="delete.php?id=<?php echo $row['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">SUPP</a>
                    <a href="update.php?id=<?php echo $row['id']?>" class="font-medium text-red-600 dark:text-red-500 hover:underline ms-3 ">MODIFIER</a>
                </td>
              
           </tr>



<?php
}
  }
  ?>





  









  
</body>
</html>
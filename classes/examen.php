<?php
session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>preparation examen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="cssprofil/style.css">
  <link rel="stylesheet" href="cssprofil/output.css">
  <link rel="stylesheet" href="cssprofil/stylepro.css">
  <link rel="stylesheet" href="cssprofil/newstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jersey+15&display=swap" rel="stylesheet">
  <style>
    .form1{
  margin-top: 10%;
  margin-left: 40%;
}




  </style>

  
</head>
<body >
 
  <?php 

  require "profilclass.php";
   profil::hederprofil();
  ?>
   <form action="enregistrer.php" method="post" class="form1" >
      <h3  id="jersey-15"  >Enregistrement du planning des examens</h3>
        <label for="standard-select" class="outfit">Matière :</label>
        <div class="select">
        <select name="matiere" id="standard-select">
        <option value="" disabled selected class="outfit">Choisissez une matiere</option>
            <option value="EDO"  class="outfit">Equation différentielle</option>
            <option value="COMPTA" class="outfit">Comptabilité</option>
            <option value="ANALYSE" class="outfit">Analyse Numerique</option>
            <option value="WEB" class="outfit">programation web</option>
            <option value="JAVA" class="outfit">Java</option>
           
        </select><br><br>
        </div>
        <label for="date"class="outfit">Date de l'examen :</label>
        <input type="date" id="date" name="date" required><br><br>
        
        <label for="heure_debut"class="outfit">Heure de début :</label>
        <input type="time" id="heure_debut" name="heure_debut" required><br><br>
        
        <label for="heure_fin"class="outfit">Heure de fin :</label>
        <input type="time" id="heure_fin" name="heure_fin" required><br><br>
        
        <input class="button-28" role="button" style="margin-left: 10%;" type="submit" value="Enregistrer">
    </form>
</body>


  

</html>
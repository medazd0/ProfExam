



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <title>locale&professeur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="cssprofil/style.css">
  <link rel="stylesheet" href="cssprofil/output.css">
  <link rel="stylesheet" href="cssprofil/stylepro.css">
  <link rel="stylesheet" href="cssprofil/newstyle.css">
  <script src="https://cdn.tailwindcss.com"></script>
  
  <style>
    
    .form-container {
            display: flex;
            justify-content: center;
            column-gap: 10%;
            margin-top: 100px;
        }
    
  </style>
 
</head>

<body>

<?php
include('profilclass.php');
include('dbcon.php');
profil::hederprofil();

$conn = $db;
$sql_salle = "SELECT ID_local, Nom_local, Capacité FROM local";
$sql_enseignant = "SELECT * FROM enseignant ";
$sql_examen = "SELECT * FROM examen";
echo  "1er php work";
$result_salle = $conn->query($sql_salle);
$result_enseignant = $conn->query($sql_enseignant);
$result_examen = $conn->query($sql_examen);
?>

<form  method="post" action="salletrt.php" >
  
    <div class="form-container">
        <div class="select" >

            <select name='salle'>
            <option value="" disabled selected class="outfit">Sélectionnez une salle </option>
                <?php
                if ($result_salle->num_rows > 0) {
                    while ($row = $result_salle->fetch_assoc()) {
                        echo "<option class='outfit' value='" . $row["ID_local"] . "'>" . $row["Nom_local"] . " (Capacité: " . $row["Capacité"] . ")</option>";
                    }
                } else {
                    echo "<option value=''>Aucune salle disponible</option>";
                }
                ?>
            </select>
        </div>

        <div class="select">
         
            <select name="enseignant" id="enseignant" >
            <option value="" disabled selected class="outfit">Sélectionnez un enseignant</option>
                <?php
                if ($result_enseignant->num_rows > 0) {
                    while ($row = $result_enseignant->fetch_assoc()) {
                        echo "<option class='outfit'  value='" . $row["ID_enseignant"] . "'>" . $row["Nom_enseignant"] . " " . $row["Prenom_enseignant"] . "</option>";
                    }
                } else {
                    echo "<option value=''>Aucun enseignant trouvé</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div  class="examen">
    <select name="examen" id="examen"   >
    <option value="" disabled selected class="outfit">Choisissez un examen</option>
    <?php
    if ($result_examen->num_rows > 0) {
        while ($row = $result_examen->fetch_assoc()) {
            echo "<option class='outfit'value='" . $row["ID_examen"] . "'>" . $row["matiere"] . " -Date: " . $row["Date"] . ", Heure de départ: " . $row["Heure_depart"] . ", Heure de fin: " . $row["Heure_fin"] ."</option>";
        }
    } else {
        echo "<option value=''>Aucun examen trouvé</option>";
    }
    ?>
</select>
</div>

    <br>
    <input class="button-41" role="button" type="submit" value="Enregistrer" style="margin-left: 38% ; margin-top:25px">
</form>

<?php
$db->close();
?>
<?php
// Inclure le fichier de connexion à la base de données
include('dbcon.php');

// Requête SQL pour récupérer les données de la table de jonction enseignant avec le nom du local
$sql = "SELECT e.*, ex.matiere, ex.Date, ex.Heure_depart, ex.Heure_fin, en.Nom_enseignant, en.Prenom_enseignant, l.Nom_local
        FROM enseignant e
        INNER JOIN examen_enseignant ee ON e.ID_enseignant = ee.ID_enseignant
        INNER JOIN examen ex ON ee.ID_examen = ex.ID_examen
        INNER JOIN enseignant en ON en.ID_enseignant = e.ID_enseignant
        INNER JOIN local l ON ex.ID_local = l.ID_local"; // Ajout de la jointure avec la table local et sélection du nom_local

// Exécuter la requête
$result = $db->query($sql);

// Vérifier s'il y a des résultats
if ($result->num_rows > 0) {
    // Afficher les résultats dans un tableau
    echo "<table border='1' class='styled-table'>";
    echo "<tr ><th class='headtab' >Matière</th><th class='headtab'>Date</th><th class='headtab'>Heure départ</th><th class='headtab'>Heure fin</th><th class='headtab'>Nom local</th><th class='headtab'>Nom enseignant</th><th class='headtab'>Prénom enseignant</th><th class='headtab'>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["matiere"] . "</td>";
        echo "<td>" . $row["Date"] . "</td>";
        echo "<td>" . $row["Heure_depart"] . "</td>";
        echo "<td>" . $row["Heure_fin"] . "</td>";
        echo "<td>" . $row["Nom_local"] . "</td>"; // Affichage du nom_local
        echo "<td>" . $row["Nom_enseignant"] . "</td>";
        echo "<td>" . $row["Prenom_enseignant"] . "</td>";
        // Ajouter la colonne d'action avec des liens de suppression et de modification
        echo "<td class='flex items-center px-1 py-1'>";
        echo "<a href='supp.php?id_enseignant=" . $row['ID_enseignant'] . "' class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>SUPP</a>";
       
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
} else {
    echo "Aucun résultat trouvé.";
}

// Fermer la connexion à la base de données
$db->close();
?>



 
</body>

</html>
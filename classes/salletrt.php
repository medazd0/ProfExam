<?php
include('dbcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enseignant = $_POST["enseignant"];
    $examen = $_POST["examen"];
    $salle = $_POST["salle"];

    
    $sql_check = "SELECT * FROM examen_enseignant WHERE ID_examen = ? AND ID_enseignant = ?";
    $stmt_check = $db->prepare($sql_check);
    $stmt_check->bind_param("ii", $examen, $enseignant);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    
    // Si une telle ligne existe déjà, afficher un message d'erreur
    if ($result_check->num_rows > 0) {
      //errrrrrrrrrrrrrrrrrrrrrrrrreur ici il faut afficher cette exception
      echo ' Cette combinaison ID_Examen et ID_Enseignant existe déjà';
    } else {
        // Sinon, procéder à l'insertion dans la table examen_enseignant
        $sql_insert = "INSERT INTO examen_enseignant (ID_examen, ID_enseignant) VALUES (?, ?)";
        $stmt_insert = $db->prepare($sql_insert);
        $stmt_insert->bind_param("ii", $examen, $enseignant);
       

        $sql_update_examen = "UPDATE examen SET ID_local = ? WHERE ID_examen = ?";
$stmt_update_examen = $db->prepare($sql_update_examen);
$stmt_update_examen->bind_param("ii", $salle, $examen);
 $stmt_update_examen->execute();

  
       
        // Exécuter la requête d'insertion
        if ($stmt_insert->execute()) {
          echo "Lien entre l'examen et l'enseignant enregistré avec succès";
        } else {
          echo "Erreur lors de l'enregistrement du lien entre l'examen et l'enseignant";
        }
        
        // Fermer les déclarations préparées
        $stmt_insert->close();
    }
    
    // Fermer la connexion à la base de données
    $stmt_check->close();
    $db->close();
    header("Location: salle.php");
}
?>
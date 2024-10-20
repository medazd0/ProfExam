<?php
include('dbcon.php');

$mysqli=$db;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matiere = $_POST["matiere"];
    $date = $_POST["date"];
    $heure_debut = $_POST["heure_debut"];
    $heure_fin = $_POST["heure_fin"];


    
    $sql = "INSERT INTO `examen` (matiere, Date, Heure_depart, Heure_fin) VALUES (?, ?, ?, ?)";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ssss", $matiere, $date, $heure_debut, $heure_fin);

        if ($stmt->execute()) {
            echo "Enregistrement réussi !";
        } else {
            echo "Erreur lors de l'exécution de la requête : " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Erreur lors de la préparation de la requête : " . $mysqli->error;
    }
}
$mysqli->close();
?>
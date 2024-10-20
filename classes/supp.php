<?php
// Inclure le fichier de connexion à la base de données
include('dbcon.php');

// Vérifier si l'ID de l'enseignant est présent dans l'URL
if (isset($_GET['id_enseignant']) && !empty($_GET['id_enseignant'])) {
    // Récupérer l'ID de l'enseignant depuis l'URL
    $id_enseignant = $_GET['id_enseignant'];
    
    // Requête SQL pour supprimer les lignes de la table examen_enseignant associées à l'enseignant
    $sql_delete = "DELETE FROM examen_enseignant WHERE ID_enseignant = ?";
    $stmt_delete = $db->prepare($sql_delete);
    
    // Vérifier si la préparation de la requête a réussi
    if ($stmt_delete) {
        // Lier les paramètres et exécuter la requête
        $stmt_delete->bind_param("i", $id_enseignant);
        if ($stmt_delete->execute()) {
            // Redirection vers la page salle.php après la suppression
            header("Location: salle.php");
            exit();
        } else {
            echo "Erreur lors de la suppression : " . $stmt_delete->error;
        }
        // Fermer la déclaration préparée
        $stmt_delete->close();
    } else {
        echo "Erreur lors de la préparation de la requête de suppression : " . $db->error;
    }
} else {
    echo "ID de l'enseignant non spécifié.";
}

// Fermer la connexion à la base de données
$db->close();
?>

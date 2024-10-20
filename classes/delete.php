<?php
require 'dbcon.php';

// Vérifier si l'ID est passé dans l'URL
if(isset($_GET['id'])) {
   
    $id = $_GET['id'];


    $query = $db->prepare("DELETE FROM users WHERE id = ?");
    $query->bind_param("i", $id);
    $query->execute();

 
    if($query->affected_rows > 0) {
        // Rediriger vers une autre page si la suppression a réussi
        header("Location: Allusers.php");
        exit; // Arrêter l'exécution du script après la redirection
    } else {
        echo "Échec de la suppression.";
    }
} else {
    echo "ID non spécifié dans l'URL.";
}
?>


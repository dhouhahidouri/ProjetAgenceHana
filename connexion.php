<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "agenceHana"; 

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>

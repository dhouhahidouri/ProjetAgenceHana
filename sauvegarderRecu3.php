
<?php
include_once("connexion.php");

if (isset($_POST['sauvegarder'])) {
    // Récupérez les valeurs des champs du formulaire
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $montant = mysqli_real_escape_string($conn, $_POST['montant']);
	$num =mysqli_real_escape_string ($conn,$_POST['num']);
	$immeuble =mysqli_real_escape_string ($conn,$_POST['immeuble']);	
    $date =mysqli_real_escape_string ($conn,$_POST['date']);
    $date2 =mysqli_real_escape_string ($conn,$_POST['date2']);
    $date_signature =mysqli_real_escape_string ($conn,$_POST['date_signature']);
    

    // Échapper les valeurs pour éviter les problèmes de syntaxe
    $query = "INSERT INTO recu3 (name, numero,montant, num, immeuble, date, date2, date_signature) VALUES ('$name', '$numero', '$montant', '$num', '$immeuble', '$date', '$date2', '$date_signature')";

    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
        header("Location: recu3.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>



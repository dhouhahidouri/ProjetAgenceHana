
<?php
include_once("connexion.php");

if (isset($_POST['sauvegarder'])) {
    // Récupérez les valeurs des champs du formulaire
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $montant = mysqli_real_escape_string($conn, $_POST['montant']);
    $reste = mysqli_real_escape_string($conn, $_POST['reste']);
     $appartement =mysqli_real_escape_string ($conn,$_POST['appartement']);
    $immeuble =mysqli_real_escape_string ($conn,$_POST['immeuble']);
	$num =mysqli_real_escape_string ($conn,$_POST['num']);
	$prix =mysqli_real_escape_string ($conn,$_POST['prix']);
    $date =mysqli_real_escape_string ($conn,$_POST['date']);
    $date_signature =mysqli_real_escape_string ($conn,$_POST['date_signature']);
    

    // Échapper les valeurs pour éviter les problèmes de syntaxe
    $query = "INSERT INTO recu2 (name, montant, reste, appartement, immeuble, num, prix, date, date_signature) VALUES ('$name', '$montant', '$reste', '$appartement', '$immeuble', '$num', '$prix', '$date', '$date_signature')";

    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
        header("Location: recu2.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>



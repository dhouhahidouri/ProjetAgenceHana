
<?php
include_once("connexion.php");

if (isset($_POST['sauvegarder'])) {
    // Récupérez les valeurs des champs du formulaire
    $numero = mysqli_real_escape_string($conn, $_POST['numero']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
     $matriculeClient =mysqli_real_escape_string ($conn,$_POST['matriculeClient']);
    $bloc =mysqli_real_escape_string ($conn,$_POST['bloc']);
    $num =mysqli_real_escape_string ($conn,$_POST['num']);
    $prix1 =mysqli_real_escape_string ($conn,$_POST['prix1']);
    $pourcentage1 =mysqli_real_escape_string ($conn,$_POST['pourcentage1']);
    $montantHT1 =mysqli_real_escape_string ($conn,$_POST['montantHT1']);
    $totalHT =mysqli_real_escape_string ($conn,$_POST['totalHT']);
    $totalTVA =mysqli_real_escape_string ($conn,$_POST['totalTVA']);
	$netAPayer =mysqli_real_escape_string ($conn,$_POST['netAPayer']);
	$lettre =mysqli_real_escape_string ($conn,$_POST['lettre']);

    // Échapper les valeurs pour éviter les problèmes de syntaxe
    $query = "INSERT INTO facture2 (numero, date, nom, matriculeClient, bloc, num, prix1, pourcentage1, montantHT1, totalHT, totalTVA, netAPayer, lettre) VALUES ('$numero', '$date', '$nom', '$matriculeClient', '$bloc', '$num', '$prix1', '$pourcentage1', '$montantHT1', '$totalHT', '$totalTVA', '$netAPayer', '$lettre')";

    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
        header("Location: facture2.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>



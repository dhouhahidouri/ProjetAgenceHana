
<?php
include_once("connexion.php");

if (isset($_POST['sauveg'])) {
    // Récupérez les valeurs des champs du formulaire
    $client_name = mysqli_real_escape_string($conn, $_POST['client_name']);
    $cin = mysqli_real_escape_string($conn, $_POST['cin']);
    $dateloc = mysqli_real_escape_string($conn, $_POST['dateloc']);
     $datecin =mysqli_real_escape_string ($conn,$_POST['datecin']);
    $locationtype =mysqli_real_escape_string ($conn,$_POST['locationtype']);
    $location =mysqli_real_escape_string ($conn,$_POST['location']);
    $numero =mysqli_real_escape_string ($conn,$_POST['numero']);
    $prixchet =mysqli_real_escape_string ($conn,$_POST['prixchet']);
    $prix =mysqli_real_escape_string ($conn,$_POST['prix']);
    $periode =mysqli_real_escape_string ($conn,$_POST['periode']);
    $datedeb =mysqli_real_escape_string ($conn,$_POST['datedeb']);
    $datefin =mysqli_real_escape_string ($conn,$_POST['datefin']);
	$locationfab =mysqli_real_escape_string ($conn,$_POST['locationfab']);
	$datefab =mysqli_real_escape_string ($conn,$_POST['datefab']);

    // Échapper les valeurs pour éviter les problèmes de syntaxe
    $query = "INSERT INTO contrat2 (client_name, cin, dateloc, datecin, locationtype, location, numero, prixchet, prix, periode, datedeb, datefin, locationfab, datefab) VALUES ('$client_name', '$cin', '$dateloc', '$datecin', '$locationtype', '$location', '$numero', '$prixchet', '$prix', '$periode', '$datedeb', '$datefin', '$locationfab', '$datefab')";

    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
       
		header("Location: contrat2.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>



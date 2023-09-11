
<?php
 include_once("connexion.php");

if (isset($_POST['sauvegarder'])) {
    // Récupérez les valeurs des champs du formulaire
   
    $client_name = $_POST['client_name'];
    $cin = $_POST['cin'];
    $dateloc = $_POST['dateloc'];
    $datecin = $_POST['datecin'];
    $typecont = $_POST['typecont'];
    $locationcont = $_POST['locationcont'];
    $numero = $_POST['numero'];
    $prixchet = $_POST['prixchet'];
    $prixsun = $_POST['prixsun'];
    $periode = $_POST['periode'];
    $datedeb = $_POST['datedeb'];
    $datefin = $_POST['datefin'];

    // Connexion à la base de données (incluez votre fichier de connexion)
    include_once("connexion.php");



    // Écrire la requête SQL pour insérer les données dans la base de données
    $query = "INSERT INTO contrat1 (client_name, cin, dateloc, datecin, typecont, locationcont, numero, prixchet, prixsun, periode, datedeb, datefin) VALUES ('$client_name', '$cin', '$dateloc', '$datecin', '$typecont', '$locationcont', '$numero', '$prixchet', '$prixsun', '$periode', '$datedeb', '$datefin')";
    
    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
        header("Location: contrat1.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>


<?php
include_once("connexion.php");

if (isset($_POST['sauvegarder'])) {
    // Récupérez les valeurs des champs du formulaire
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $locationbirth = mysqli_real_escape_string($conn, $_POST['locationbirth']);
	$cin1 =mysqli_real_escape_string ($conn,$_POST['cin1']);
    $datecin =mysqli_real_escape_string ($conn,$_POST['datecin']);
    $name2 =mysqli_real_escape_string ($conn,$_POST['name2']);	
    $adresse1 =mysqli_real_escape_string ($conn,$_POST['adresse1']);
	  $lieu_naissance2 = mysqli_real_escape_string($conn, $_POST['lieu_naissance2']);
    $lieu_naissance1 = mysqli_real_escape_string($conn, $_POST['lieu_naissance1']);
	$adr =mysqli_real_escape_string ($conn,$_POST['adr']);
    $num =mysqli_real_escape_string ($conn,$_POST['num']);
    $adresse =mysqli_real_escape_string ($conn,$_POST['adresse']);	
    $address =mysqli_real_escape_string ($conn,$_POST['address']);
	
	$numero = mysqli_real_escape_string($conn, $_POST['numero']);
	$loc =mysqli_real_escape_string ($conn,$_POST['loc']);
    $immeuble =mysqli_real_escape_string ($conn,$_POST['immeuble']);
    $number =mysqli_real_escape_string ($conn,$_POST['number']);	
    $contrat =mysqli_real_escape_string ($conn,$_POST['contrat']);
	
	$date =mysqli_real_escape_string ($conn,$_POST['date']);	
    $immeuble2 =mysqli_real_escape_string ($conn,$_POST['immeuble2']);
    

    // Échapper les valeurs pour éviter les problèmes de syntaxe
    $query = "INSERT INTO procuration (name, locationbirth, cin1, datecin, name2, adresse1, lieu_naissance2,lieu_naissance1,adr,num,adresse,address,numero,loc,immeuble,number,contrat,date,immeuble2 ) 
	VALUES ('$name','$locationbirth', '$cin1', '$datecin', '$name2', '$adresse1','$lieu_naissance2','$lieu_naissance1','$adr','$num','$adresse','$address','$numero','$loc','$immeuble','$number','$contrat','$date','$immeuble2')";

    // Exécutez la requête
    if (mysqli_query($conn, $query)) {
        header("Location: procuration.php");
    } else {
        echo "Erreur lors de la sauvegarde des données : " . mysqli_error($conn);
    }

    // Fermez la connexion à la base de données
    mysqli_close($conn);
}
?>



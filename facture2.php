<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Formulaire Facture Client</title>
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <style>
        /* ... Votre style CSS existant ... */
        .form-group {
            
            align-items: right;
            margin-bottom: 10px;
        }

        .label {
            width: 150px;
        }

        .input {
            flex: 1;
            padding: 5px;
			
        }

        .separator {
            border-left: 1px solid black;
            height: 100%;
            margin: 0 10px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
   <a class="navbar-brand" href="#"><img src="logo.png" style="width: 100px; height: 100px; border-radius: 50%;"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="index.php">Déconnexion</a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
	 <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"
   <li class="nav-item active">
        <a class="nav-link" href="login.php"></a>
      </li>
    </ul></div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
	
      <li class="nav-item active">
        <a class="nav-link" href="Accueil.php"><img src="fleche.jpg"style="width: 100px; height: 100px; border-radius: 50%;"></a>
      </li>
	
  </div>
</nav>
<hr style="margin-top: 0; border: 1; border-top: 2px solid #ccc;"> <!-- Ligne horizontale -->






<center>
    <div class="card" style="width: 80rem;"style="center">
<span class="border">
    <div class="container mt-5">
    
    <form method="post" action="sauvegarderFacture2.php">
	
	<h2>Facture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
        <div class="form-group">
		
            <label for="numero">N° : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="numero" id="numero" required><br>
            <label for="date">Date : </label>
            <input type="date" name="date" id="date" required><br>
            <label for="matriculeFiscal"> Matricule Fiscal :000/M/A/1581592/B</label>
        </div>
        
        <div class="separator"></div>
        
        <br>
		
        <h2>Client&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2><br>
        <div class="form-group">
		
            <label for="nom">Nom:société</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="nom" id="nom" required><br>
            <label for="matriculeClient">Matricule Fiscale: </label>
            <input type="text" name="matriculeClient" id="matriculeClient" required>
        </div>
        
        <br>
        <table class="table table-striped">
		<thead class="thead-dark">
            <tr>
                <th scope="col">Type de Service</th>
                <th scope="col">Désignation</th>
                <th scope="col">Prix</th>
                <th scope="col">Pourcentage de frais</th>
                <th scope="col">Montant H.T</th>
            </tr>
			</thead>
            <tr>
                <td>Vente</td>
                <td>Résidence 0 Bloc <input type="text" name="bloc">.app N° <input type="text" name="num">.</td>
                <td><input type="text" name="prix1"></td>
                <td><input type="text" name="pourcentage1">%</td>
                <td><input type="text" name="montantHT1"></td>
            </tr>
           
            <tr>
                
                <td></td>
                <td></td>
                <td></td>
				<td colspan="2">Total HT :<input type="text" name="totalHT"></td>
                
            </tr>
            <tr colspan="2">
                
                <td></td>
                <td></td>
                <td></td>
				<td colspan="2">Total TVA 19% :<input type="text" name="totalTVA"></td>
                
            </tr>
            <tr>
                
                <td></td>
                <td></td>
                <td></td>
				<td colspan="2">Timbre :1,000</td>
                
            </tr>
            <tr>
                
                <td></td>
                <td></td>
                <td></td>
				<td colspan="2">Net à payer :<input type="text" name="netAPayer"></td>
                
            </tr>
        </table>
		<p> Soit <input type="text" name="lettre"> En lettre.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
		<p style="text-align: left;"><B> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   Cachet et Signature</B></p><br><br>
		    <!-- Boîte d'alerte de remplissage obligatoire -->
                            <div id="alertBox" class="alert alert-danger" style="display: none;">
                                Veuillez remplir tous les champs obligatoires.
                            </div>
		  
		    <div style="text-align: right;"><button type="submit" name="sauvegarder" class="btn btn-success"onclick="validateAndSubmit()">Sauvegarder</button>
                <button class="btn btn-primary" onclick="printPage()">Imprimer</button></div> </div></span></div>
    </form>
	 <!-- Ajouter les liens vers les fichiers JS Bootstrap (facultatif, mais utile pour certaines fonctionnalités) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	 <script>
        function printPage() {
            window.print();
        }
		
		
		
		 function validateAndSubmit() {
            // Récupérer tous les champs obligatoires
            const requiredInputs = document.querySelectorAll('input[required]');
            let allFilled = true;

            // Vérifier si tous les champs sont remplis
            for (const input of requiredInputs) {
                if (!input.value.trim()) {
                    allFilled = false;
                    break;
                }
            }

            // Si tous les champs ne sont pas remplis, afficher la boîte d'alerte
            if (!allFilled) {
                document.getElementById('alertBox').style.display = 'block';
            } else {
                // Tous les champs sont remplis, soumettre le formulaire
                document.getElementById('alertBox').style.display = 'none';
                document.querySelector('form').submit();
            }
        }
    </script>
		
    
	
</body>
</html>

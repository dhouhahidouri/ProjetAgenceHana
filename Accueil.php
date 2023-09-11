<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Page d'Accueil</title>
    <!-- Ajouter les liens vers les fichiers CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body > 
<nav class="navbar navbar-expand-lg navbar-light bg-light" > 
   <a class="navbar-brand" href="#"><img src="logo.png" style="width: 100px; height: 100px; border-radius: 50%;"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Contrat<span class="sr-only">(current)</span></a>
      </li>
      
   
      <li class="nav-item">
        <a class="nav-link disabled" href="index.php">Déconnexion</a>
      </li>

    </ul>
  
</nav>
<hr style="margin-top: 0; border: 1; border-top: 2px solid #ccc;"> <!-- Ligne horizontale -->
<div class="container mt-5">
    <h1 class="text-center"></h1>
    <div class="d-flex justify-content-center"> <!-- Centrage horizontal -->
        <div class="card h-100 mb-4 me-2" style="width: 18rem;">
            <img src="images (1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
               <center><ul> <li><a href="contrat1.php" class="btn btn-transparent stretched-link"> عــقد وســـاطة عــــقارية 5% - 10%</a></li></ul></center>
			   <center> <ul> <li><a href="contrat2.php" class="btn btn-transparent stretched-link">عــقد وســـاطة عــــقارية 2%</a></li></ul></center>
            </div>
        </div>
        <div class="card h-100 mb-4" style="width: 18rem;">
            <img src="facture.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
              <center>  <ul> <li><a href="facture1.php" class="btn btn-transparent stretched-link">Facture Client-Location</a></li></ul></center>
			  <center>  <ul> <li><a href="facture2.php" class="btn btn-transparent stretched-link">Facture Client-Vente</a></li></ul></center><br>
            </div>
        </div>
		
		 <div class="card h-100 mb-4" style="width: 19rem;">
            <img src="Recu.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
              <center>  <ul> <li><a href="recu1.php" class="btn btn-transparent stretched-link">RECU avance location estivale</a></li></ul></center>
			  <center>  <ul> <li><a href="recu2.php" class="btn btn-transparent stretched-link">RECU avance vente</a></li></ul></center><br>
			  <center>  <ul> <li><a href="recu3.php" class="btn btn-transparent stretched-link">RECU proprietaire location</a></li></ul></center>
			  <center>  <ul> <li><a href="recu4.php" class="btn btn-transparent stretched-link">RECU vente</a></li></ul></center><br>
			  
            </div>
        </div>
		 <div class="card h-100 mb-4" style="width: 19rem;">
            <img src="procuration.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
              <br><center>  <ul> <li><a href="procuration.php" class="btn btn-transparent stretched-link">PROCURATION mahdia</a></li></ul></center><br>
			  <br><br><br><br><br>
			    
			  
			
            </div>
        </div>
    </div>
</div>


<!-- Ajouter les liens vers les fichiers JS Bootstrap (facultatif, mais utile pour certaines fonctionnalités) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

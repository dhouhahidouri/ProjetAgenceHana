<!DOCTYPE html>
<html>
<head>
<?php include_once("connexion.php"); ?>

    <meta charset="UTF-8">
    <title>عقد وساطة عقارية</title>
    <!-- Ajouter les liens vers les fichiers CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
	
	 
        .logo {
            display: block;
            position: fixed;
            top: 20px;
            left: 20px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
           
            background-size: cover;
            background-position: center;
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
<div class="card" style="width: 60rem;"style="center">
<span class="border">
    <div class="container mt-5">
	 <!--<div class="logo"><img src="logo.png"></div>--> 
	 <center>
        <h1 class="text-center">عقد وساطة عقارية</h1>
		<form method="post" action="sauvegarder.php">
        <div class="row justify-content-center">
            <div class="col-md-10">
			
                <div style="text-align: right;"><p>  HO..:عدد</p></div><br>
				<div style="text-align: right;"><p> حرر هذا العقد بين كل من شركة الهناء أوربي للخدمات العقارية مقرها الاجتماعي بعمارة البرج الطابق الثالث شارع الطيب المهيري المهدية ووكيلها آلسيد رضوان العبيد صاحب بطاقة التعريف الوطنية عـــدد06907900المسلمة بتونس في 31 مارس2017 مهنته وكيل عقاري ويشار اليه(ها) في هذا العقد بالطرف الأول </p></div>
				  <div style="text-align: right;">
                <p><input type="text" name="client_name"style="text-align: right"class="input"required>و السيد(ة) </p>
				<p><input type="text" name="cin"style="text-align: right"class="input"required> صاحب بطاقة تعريف وطنية رقم </p>
				<p><input type="text" style="text-align: right"name="dateloc"class="input"required> الصادرة في  </p>
               <div style="text-align: right;"><p>	 <input type="date" name="datecin"style="text-align: right"class="input"required>بتاريخ </p></div>
                <p><input type="text" name="typecont"style="text-align: right"class="input"required>و يشار اليه (ها) في هذا العقد بالطرف الثاني الذي يمتلك عقارا متمثل في  </p>
				<p><input type="text" name="locationcont"style="text-align: right"class="input"required>  الكائن في</p>
               <div style="text-align: right;"> <p>				معرف الرسم العقاري عدد <input type="text" name="numero"style="text-align: right"class="input"required> الثمن <input type="text" name="prixchet"style="text-align: right"class="input"required> شتاء </p></div>
                <p><input type="text" name="prixsun"style="text-align: right"class="input"required> وصيفا  </p>
                <p>قد رغب في تسويق وحدته بالكراء عن طريق شركة الهناء أوربي للخدمات العقارية. إتفق الطرفان على أن يكون عمولة الطرف الأول 05 ) % صيفا10%( من السعر الإجمالي لكراء للوحدة المذكورة بإعتبارها خدمات فقط و ليست للتأمين على المحل. لذا فقد تلاقت إرادة الطرفين لإبرام هذا العقد و بعد أن اقر الطرفان بأهليتها القانونية للتعاقد فقد اتفقا على ما يلي: </p>
               

<p> <B>الفصل الأول : </B>التمهيد السابق جزء لا يتجزأ من العقد و مفسر له و مكمل لفصوله</p>
<p><B> الفصل الثاني : </B>اتفق الطرفان على أن تكون مدة هذا العقد هي <input type="text" name="periode"style="text-align: right"class="input"required> أشهر تبدأ من تاريخ <input type="date" style="text-align: right"name="datedeb"class="input"required> و تنتهي بتاريخ <input type="date" name="datefin"style="text-align: right"class="input"required> و يجدد لمدد أخرى بالاتفاق بين الطرفين</p>
<p><B>الفصل الثالث :</B> اقر الطرف الثاني بإطلاعه و موافقته على الأتعاب المستحقة للطرف الأول في حالة توصله إلى آلمكتري للوحدة المملوكة للطرف الثاني و توزع كاستشارات تسويقية و عمولة و رسوم معاينة</p>
<p><B>الفصل الرابع : </B>بمقتضى هذا العقد يتولى الطرف الثاني توكيل الطرف الأول في كل ما يتعلق بهذا الكتب من إمضاء و قبض لمعاليم الكراء والتصرف قصد استخلاص جميع الفواتير من ماء وكهرباء المتعلقة بعقد التسويغ.</p>
<p><B>الفصل الخامس : </B>لا يتحمل الطرف الأول مسؤولية ما يحدث في الوحدة المذكورة من القوه القاهرة أو أسباب خارجه عن ارادته او سرقه او حرائق و في حالة حدوث أي أضرار للمحل المكترى يحق للشركة نيابته في التتبعات القضائية و القانونية مع تمويلها بما يلزم من مصاريف لخلاص العدول المنفذين و المحامين</p>
<p><B>الفصل السادس : </B>من المتفق عليه بين الطرفين أن هذا العقد يعتبر قيد يمنع الطرف الثاني من التعامل مع أي شركة تسويق أخرى حتى نهاية صلاحية العقد و عند حصول الطرف الأول على حجوزات للوحدة المذكورة بهذا العقد فلا يحق للطرف الثاني إلغاء ذلك و في صورة مخالفته يقوم بدفع جميع المبلغ المتفق عليه طيلة الحجز كاملة. في حالة مخالفة هذا البند يستحق الطرف الأول أتعابه كاملة فضلا عن حفظ حقه في طلب التعويض.</p>
<p><B>الفصل السابع : </B>يلتزم الطرف الثاني بسداد أتعاب الطرف الأول كاملة فور توقيع عقد الكراء للوحدة المشار إليها مع عميل الطرف الأول ولا تبرؤ ذمة الطرف الثاني من سداد هذه الأتعاب إلا بحصوله على مخالصة موقعة.</p>
</div>

<div style="text-align: left;"><B><p>توقيع الطرف الأول     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  توقيع الطرف الثاني </p></B></div><br>

    <!-- Boîte d'alerte de remplissage obligatoire -->
                            <div id="alertBox" class="alert alert-danger" style="display: none;">
                                Veuillez remplir tous les champs obligatoires.
                            </div>
   <div style="text-align: right;"><button type="submit" name="sauvegarder" class="btn btn-success"onclick="validateAndSubmit()">حفظ</button>
                <button class="btn btn-primary" onclick="printPage()">طباعة</button></div>
				</div>
				
            </div>
			</form>
			</center>
        </div>
		
    </div></span></div>
	</center>

    
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

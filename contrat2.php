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
   
    </ul>
  </div>
</nav>
<center>
<div class="card" style="width: 60rem;"style="center">
<span class="border">
    <div class="container mt-5">
	 <!--<div class="logo"><img src="logo.png"></div>--> 
	 <center>
        <h1 class="text-center">عقد وساطة عقارية</h1>
		<form method="post" action="sauveg.php">
        <div class="row justify-content-center">
            <div class="col-md-10">
			
                <div style="text-align: right;"><p>.....عدد </p></div><br>
				<div style="text-align: right;"><p>حرر هذا العقد بين كل من شركة الهناء أوربي للخدمات العقارية مقرها الاجتماعي شارع الطاهر صفر المهدية  , سجلها
التجاري عـــدد 16183362018B مرسم بالمحكمة الابتدائية بالمهدية , وكيلها السيد رضوان العبيد صاحب بطاقة
التعريف الوطنية عـــدد 06907900 المسلمة بتونس في 31 مارس 2017 مهنته وكيل عقاري
و يشار اليه(ها) في هذا العقد بالطرف الأول(الشركة). </p></div>
				
                 <div style="text-align: right;">	<p><input type="text" name="client_name"style="text-align: right"class="input"required>و السيد(ة) </p></div>
				 <div style="text-align: right;">	<p><input type="text" name="cin"style="text-align: right"class="input"required> صاحب بطاقة تعريف وطنية رقم: </p>
				 <div style="text-align: right;">	<p><input type="text" name="dateloc"style="text-align: right"class="input"required> الصادرة في  </div>
               <div style="text-align: right;">	 <input type="date" name="datecin"style="text-align: right"class="input"required>بتاريخ </p></div>
                <p> و يشار اليه (ها) في هذا العقد بالطرف الثاني  </p>
				<p><input type="text" name="locationtype"style="text-align: right"class="input"required>  قد رغب الطرف الثاني في تسويق وحدته للبيع التي تتمثل في  </p>
               <div style="text-align: right;"><p><input type="text" name="location"style="text-align: right"class="input"required> الكائن
في:<p>	<input type="text" name="numero"style="text-align: right"class="input"required> معرف الرسم العقاري عدد </p>
<p><input type="text" name="prixchet"style="text-align: right"class="input"required> الثمن </p></div>
                <p> قابل للنقاش عن طريق شركة الهناء أوربي للخدمات العقارية و التي يتمثل نشاطها كوسيط
لجميع عمليات البيع و الشراء و الكراء بمقابل  </p>
                <p>و قد إتفق الطرفان على ما يلي
التمهيد السابق جزء لا يتجزأ من العقد و مفسر له و مكمل لفصوله </p>
              

<p><B>الفصل الأول :موضوع العقد</B></p>
<p> يتمثل هذا العقد في توفير خدمة البيع للعقار المحدد اعلاه و قد اتفق الطرفان بأهليتها القانونية أن يكون عمولة الطرف الأول <input type="text" name="prix"style="text-align: right"class="input"required>%
من السعر الإجمالي و الحقيقي للوحدة المذكورة باستثناء الضرائب كما اقر الطرف الثاني بإطلاعه و موافقته على الاتعاب 
المستحقة و المذكورة للطرف الاول .</p>
<p><B>الفصل الثاني :مدة العقد</B></p>
<p>اتفق الطرفان على أن تكون مدة هذا العقد هي <input type="text" name="periode"style="text-align: right"class="input"required> أشهر  من تاريخ <input type="date" style="text-align: right"name="datedeb"class="input"required> و تنتهي
بتاريخ  <input type="date" style="text-align: right"name="datefin"class="input"required> قابل للتجديد ولا يمكن إنهاؤها قبل التاريخ المنصوص عليه. و يبقى العقد ساري المفعول
حتى بانتهاء المدة المذكورة ولا يلغى إلا بفسخ كتابي مختوم من طرف الوكالة  </p>

<p><B>الفصل الثالث: عملية الخلاص</B></p>
<p>يلتزم الطرف الثاني بسداد أتعاب الطرف الأول كاملة فور توقيع عقد البيع أو وعد البيع للوحدة المشار إليها مع عميل
الطرف الأول كما تتعهد الشركة بمتابعة إجراءات البيع النهائي , و لا تبرؤ ذمة الطرف الثاني من سداد هذه الأتعاب إلا
بحصوله على مخالصة موقعة و مختومة من الشركة باستلامه كامل أتعابه كما يطبق هذا الفصل آليا على المشتري.</p>

<p><B>الفصل الرابع :الالتزام بقانون الشركة</B></p>
<p>- من المتفق عليه بين الطرفين أن هذا العقد يعتبر قيد يمنع الطرف الثاني من التعامل مع أي شركة تسويق أخرى منافسة او
تكليف اي شخص بذلك حتى نهاية مدة هذا العقد و في حالة مخالفة هذا البند يستحق الطرف الأول أتعابه كاملة فضلا عن
حفظ حقه في طلب التعويض.
- التزام الطرف الثاني بعدم التدخل في مهام الشركة العقارية و في عملية البيع  ,كما يمنع من استقبال اي مشتري لزيارة
العقار دون عميل من الشركة و يتوجب عليه اعلام اي مشتري بان العقار لا يباع إلا عن طريق شركة الهناء أوربي
للخدمات العقارية, و انه ملزم بدفع 2% من السعر الإجمالي للعقار.
- يلزم الطرف الثاني بإتمام إجراءات البيع عند التوصل الشركة إلى مشتري بالثمن المتفق عليه لبيع العقار و عند رفضه
فهو ملزم بدفع جميع الأتعاب المستحقة للطرف الأول.
و في صورة مخالفة هذا الفصل والاتفاق مع المشتري لإتمام عملية البيع دون حضور وكيل الشركة فهو ملزم بدفع
العمولة كاملة دون التمتع بأي امتيازات والمحددة ب 3%.</p>
<p><B>الفصل الخامس : النزاعات القضائية</B></p>
<p>في حالة عدم التزام الطرف الثاني بسداد عمولة الطرف الأول فور استحقاقها فتضطر الشركة للجوء الى القضاء و عدم
تمتعك بجميع امتيازاتها و دفع 3% من السعر الاجمالي و ذلك وفقا للقانون التونسي عدد 55 لسنة 1981 المؤرخ في 23
جوان 1981 و لإحكام المادة عدد 66333 الصادرة بتاريخ 23 جوان 1998
- كل النزاعات التي تنشأ عن تنفيذ هذا العقد تكون من اختصاص محاكم مدينه المهدية دون غيرها .
حرر هذا العقد من نسختين بيد كل طرف نسخة للعمل بها عند اللزوم.</p>

<p><input type="date" style="text-align: right"name="datefab"class="input"required> <input type="text" name="locationfab"style="text-align: right"class="input"required> حرر في </p>




<div style="text-align: left;"><p>  توقيع الطرف الأول <p>شركة الهناء أوربي للخدمات العقارية</p>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  توقيع الطرف الثاني   <p> ......السيد</p></p></div><br>

    <!-- Boîte d'alerte de remplissage obligatoire -->
                            <div id="alertBox" class="alert alert-danger" style="display: none;">
                                Veuillez remplir tous les champs obligatoires.
                            </div>
  <button type="submit" name="sauveg" class="btn btn-success"onclick="validateAndSubmit()">حفظ</button>
                <button class="btn btn-primary" onclick="printPage()">طباعة</button>
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

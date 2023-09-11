<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php"><img src="logo.png" style="width: 100px; height: 100px; border-radius: 50%;"></a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              
            </nav>
          </div>

          
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section" id="home-section">

      <div class="slide-1" style="background-image: url('images/hero_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="sign">
                <!--sign-->
                <div class="container <?php echo (isset($_GET['errorp']) || isset($_GET['signup']))? 'right-panel-active':''; ?>" id="container">
                  <div class="form-container sign-up-container">
                    <form action="includes/signup1.inc.php" method="post" id="signup_form">
                      <h1 class="title">Sign Up</h1>
                      <br>
                      <?php
                      if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['errorp']=="invalidmailuid"){
                          echo '<div style="color:red;">Invalid username and e-mail !</div>';
                        }else if ($_GET['errorp']=="invaliduid"){
                          echo '<div style="color:red;">Invalid username !</div>';
                        }else if ($_GET['errorp']=="invalidmail"){
                          echo '<div style="color:red;">Invalid e-mail !</div>';
                        }else if ($_GET['errorp']=="passwordcheck"){
                          echo '<div style="color:red;">Passwords don\'t match!</div>';
                        }else if ($_GET['errorp']=="usertaken"){
                          echo '<div style="color:red;">Username is already taken!</div>';
                        }
                      }elseif (isset($_GET['signup']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Signup Successful ! Feel free to login !</div>';
                      }
                       ?>
                      <div id="error_signup_name"></div>
                      <input type="text" id="name_signup" name="uid" placeholder="Name" value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invalidmail' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields'){
                          echo  isset($_GET['uid']) ? $_GET['uid']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_email"></div>
                      <input type="email" id="mail_signup" name="mail" placeholder="E-mail"
                        value="<?php if (isset($_GET['errorp'])){
                        if ($_GET['errorp']=='invaliduid' || $_GET['errorp']=='passwordcheck' || $_GET['errorp']=='emptyfields' || $_GET['errorp']=='usertaken'){
                          echo  isset($_GET['mail']) ? $_GET['mail']:'';
                        }else {
                          echo '';
                        }
                      }  ?>" />
                      <div id="error_signup_pwd1"></div>
                      <input type="password" id="pwd1_signup" name="pwd" placeholder="Password" />
                      <div id="error_signup_pwd2"></div>
                      <input type="password" id="pwd2_signup" name="pwd-repeat" placeholder="Repeat Password" />
                      <button>Sign Up</button>
                    </form>

                  </div>
                  <div class="form-container sign-in-container">
                    <form action="includes/login.inc.php" method="post" id="signin_form">
                      <h1 class="title">Sign in</h1>
                      <br>
                      <?php
                      if (isset($_GET['error'])){
                        if ($_GET['error']=="emptyfields"){
                          echo '<div style="color:red;">Fill in all fields !</div>';
                        }else if ($_GET['error']=="wrongpwd"){
                          echo '<div style="color:red;">Wrong password!</div>';
                        }else if ($_GET['error']=="nomatch"){
                          echo '<div style="color:red;">There\'s no match for your email !</div>';

                      }elseif (isset($_GET['login']) ) {
                        if ($_GET['signup']=="success")
                          echo '<div style="color:green;">Sign in Successful !</div>';
                      }
                  }?>
                      <div id="error_signin_mail"></div>
                      <input type="email" id="mailsignin" placeholder="Email" name="mailuid" placeholder="Username/E-mail"
                        value="<?php if (isset($_GET['error'])){
                                        if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                              echo  isset($_GET['mail'])?$_GET['mail']:'';
                                        }else {
                                              echo '';
                                             }
                    }  ?>" />
                      <div id="error_signin_pwd"></div>
                      <input type="password" id="pwdsignin" name="pwd" placeholder="Password" />
                      <a href="mail_input.php">Forgot your password?</a>
                      <button>Sign In</button>
                    </form>
                  </div>
                  <div class="overlay-container">
                    <div class="overlay">
                    <div id="overlay-left" class="overlay-panel overlay-left">
                          <h1>Welcome Back!</h1>
                          <p>To keep connected with us please login with your personal info</p>
                          <button class="ghost" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay-panel overlay-right">
                          <h1>Hello</h1>
                          <p>Enter your personal details and start </p>
                          <button class="ghost" id="signUp">Sign Up</button>
                        </div>
                    </div>
                  </div>
              </div>
            </div>
            <!--end-->
          </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>



        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      



  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

  </body>
</html>

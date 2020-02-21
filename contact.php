
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Project G.a</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|DM+Serif+Display:400,400i&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">Project G.a</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <a href="connexion.php" class="w3-button w3-black">Connexion</a>
          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recipes.html">Menus</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>



          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <div class="slider-wrap">
      <div class="slider-item" style="background-image: url('img/hero_1.jpg');">

        <div class="container">
          <div class="row slider-text align-items-center justify-content-center">
            <div class="col-md-8 text-center col-sm-12 ">
              <h1 data-aos="fade-up">Contactez-nous</h1>
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Bessoin d'information ?</p>
              <input data-aos="fade-up" data-aos-delay="200" onclick="location.href='contact_mail.php'" type="submit" value="contactez-nous">

            </div>
          </div>
        </div>

      </div>
    <!-- END slider -->
    </div>


    <section class="section  pt-5 top-slant-white2 relative-higher bottom-slant-gray">

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="contact_mail.php" method="POST">
              <div class="row">
                <div class="col-md-6 form-group">
                  <label for="name">Nom</label>
                  <input type="text" name="name" class="form-control ">
                </div>
                <div class="col-md-6 form-group">
                  <label for="phone">Téléphone</label>
                  <input type="text" name="phone" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">

                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email">E-mail</label>
                  <input type="email" name="email" class="form-control ">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message">Votre Message</label>
                  <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="submit" value="Envoyer un  message" class="btn btn-primary">
                </div>
              </div>
            </form>
          </div>

          <div class="col-lg-6 pl-2 pl-lg-5">

            <div class="col-md-8 mx-auto contact-form-contact-info">
              <h4 class="mb-5">Détails du contact</h4>
                <p class="d-flex">
                  <span class="ion-ios-location icon mr-5"></span>
                  <span>207 Avenue Gallieni, 93140 Bondy</span>
                </p>

                <p class="d-flex">
                  <span class="ion-ios-telephone icon mr-5"></span>
                  <span>01 48 49 90 90</span>
                </p>

                <p class="d-flex">
                  <span class="ion-android-mail icon mr-5"></span>
                  <span>info2020ga@gmail.com</span>
                </p>
              </div>

          </div>
        </div>
      </div>

    </section>

    <section class="section bg-light pt-0 relative-higher">

      <div class="clearfix mb-5 pb-5 ">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
      </div>
    </section> <!-- .section -->



    <footer class="site-footer" role="contentinfo">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>A propos</h3>
            <p class="mb-5">Vous pouvez nous retrouver sur vos réseaux sociaux favori en tapant simplement Project G.a.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
              <p> (Béta) </p>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Heures d'ouverture</h3>
              <p><strong class="d-block font-weight-normal text-black">Lundi au vendredi</strong> de 10h30 à 22h30</p>
            </div>
            <div>
              <h3>Nos Informations</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Adress:</span>
                  <span>207 Avenue Gallieni, 93140 Bondy</span></li>
                <li class="d-block"><span class="d-block text-black">Téléphone:</span><span>01 48 49 90 90</span></li>
                <li class="d-block"><span class="d-block text-black">E-mail:</span><span>info2020ga@gmail.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="about.html">A propos</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">

          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tout droits réservé</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>


    <script src="js/main.js"></script>

  </body>
</html>

<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

     
    <title>संपर्क</title>
    <!-- normalize core CSS -->
    <link href="css/normalize.css" rel="stylesheet" />

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="bootstrap/css/carousel.css" rel="stylesheet" />
    <link href="bootstrap/fonts/glyphicons-halflings-regular.eot" rel="stylesheet" />

    <!-- Load jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet" />

    <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- Google Fonts - Change if needed -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400italic,400,700,300,600"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Oxygen:400,700,300"
      rel="stylesheet"
      type="text/css"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

    <!-- Menu shrinking -->
    <script type="text/javascript" src="js/menu.js"></script>

    <!-- Main styles of this template -->
    <link href="css/style.min.css?v=1.0.0" rel="stylesheet" />

    <!-- Custom CSS. Input here your changes -->
    <link href="css/custom.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button
            type="button"
            class="navbar-toggle"
            data-toggle="collapse"
            data-target=".navbar-ex1-collapse"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" style="display: flex; align-items: center; height: 50px"
            >रचनात्मक योद्धा</a
          >
        </div>
        <nav class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">मुख्य</a></li>
            <li><a href="blog.php">सामग्री</a></li>
            <li><a href="contact.php">संपर्क</a></li>
            <li><a href="privacy.php">गोपनीयता नीति</a></li>
            <li><a href="terms.php">नियम और शर्तें</a></li>
          </ul>
        </nav>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </div>

    <!-- Hero Header -->
    <header class="hero-header" style="background-image: url('./assets/images/bulksplash-huntersrace-mybhn8kaaec.jpg')">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">संपर्क</div>
        </div>
      </div>
    </header>

    <!-- Call to Action -->
    <div class="sec-alternative" style="background-image: url(img/odd_background.png)">
      <div class="container cta">
        <div class="row"></div>
      </div>
    </div>

    <!-- Our Skills -->
    <section class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">
            <p>7154 Goodwin Shore Suite 021
North Penelope, VT 98516-2123</p>
            <p>+6144677038419</p>
            <p>hattie78@prohaska.com</p>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER 2 -->
    <footer class="page-section-no-padding footer2-container">
      <div class="container">
        <div class="row">
          <!-- Copyright -->
          <div class="col-xs-12 text-center">
            <p>
              ©
              <script>
                document.write(new Date().getFullYear());
              </script>
              Copyright
            </p>
          </div>
        </div>
      </div>
    </footer>

    <div class="cookie-banner">
      <p style="color: #000000">
        इस साइट कुकीज़ का उपयोग करता है. वे आप की अनुमति प्राप्त करने के लिए पता करने के लिए आप और के बारे में जानकारी अपने उपयोगकर्ता experience.By जारी रखने के लिए साइट को ब्राउज़ करें, मैं इस बात से सहमत करने के लिए कुकीज़ के उपयोग के द्वारा साइट के मालिक के अनुसार
        <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie"
          >कुकी नीति</a
        >
      </p>

      <button class="close-cookie">×</button>
    </div>

    <script>
      window.onload = function () {
        $('.close-cookie').click(function () {
          $('.cookie-banner').fadeOut();
        });
      };
    </script>

    <script>
      let elems = document.querySelectorAll('.server-name');
      elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname;
      });
    </script>

    <!-- Scripts -->
    <!-- Loads Bootstrap Main JS -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Initiate Portoflio Script -->
    <script src="extensions/portfolio/isotope.min.js"></script>
    <script src="extensions/portfolio/portfolio.js"></script>

    <!-- Initiate Fancybox/Lightbox Script -->
    <!-- Fancybox/Lightbox -->
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox.pack.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="extensions/fancybox/jquery.fancybox.css"
      media="screen"
    />
    <script type="text/javascript" src="extensions/fancybox/jquery.fancybox-media.js"></script>
    <!-- Initiate Fancybox/Lightbox for Videos -->
  </body>
</html>

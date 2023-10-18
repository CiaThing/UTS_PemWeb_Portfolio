<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
        <title>Metronic "Acecv" Frontend Freebie</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
</head>
<body id="body" data-spy="scroll" data-target=".header">
    <!--========== HEADER ==========-->
    <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="#body">
                                <img class="logo-img" src="img/logo.png" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="home.php">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="about.php">About</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="resume copy.php">Resume</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="portfolio.php">Portfolio</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->
         <!-- Contact -->
         <div id="contact">
            <div class="bg-color-sky-light">
                <div class="container content-lg">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                           <h2>Contact Me</h2>
                            <p id = "keterangan_page"></p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row">
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>Location</h4>
                            <a href="#" id = "location"></a>
                        </div>
                        <div class="col-md-3 col-xs-6 md-margin-b-30">
                            <h4>Nomor Telepon</h4>
                            <a href="#" id = "nomor_telp"></a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Email</h4>
                            <a href="mailto:#" id ="email"></a>
                        </div>
                        <div class="col-md-3 col-xs-6">
                            <h4>Web</h4>
                            <a href="#" id = "web"></a>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Contact -->
    <!--========== FOOTER ==========-->
    <footer class="footer">
                <div class="content container">
                    <div class="row">
                        <div class="col-xs-6">
                            <img class="footer-logo" src="img/logo.png" alt="Acecv Logo">
                        </div>
                        <div class="col-xs-6 text-right sm-text-left">
                            <p class="margin-b-0"><a class="fweight-700" href="http://keenthemes.com/preview/acecv/">Acecv</a> Theme Powered by: <a class="fweight-700" href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
        </footer>
        <!--========== END FOOTER ==========-->
<!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.parallax.min.js" type="text/javascript"></script>
        <script src="vendor/jquery.appear.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/progress-bar.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <script>
            function ambilDataDariAPIcontact_page() {
                axios.get('api4.php?id=1') 
                    .then(response =>{
                        //definisikan constanta data
                        const data = response.data;
                        //manipulasi html utk menampilkan data
                        document.getElementById('keterangan_page').textContent = data.keterangan_page;
                        document.getElementById('location').textContent = data.location;
                        document.getElementById('nomor_telp').textContent = data.nomor_telp;
                        document.getElementById('email').textContent = data.email;
                        document.getElementById('web').textContent = data.web; 
                    })

                    .catch(error => {
                        console.error('Error:', error);
                    });
                }
        ambilDataDariAPIcontact_page();
        </script>
</body>
</html>
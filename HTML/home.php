<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
        <title>Cia Thing Portfolio</title>
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
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="resume.php">Resume</a></li>
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
        <div class="promo-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 sm-margin-b-60">
                        <div class="margin-b-30">
                            <h1 id = "home_nama" class="promo-block-title"></h1>
                            <p id = "home_pekerjaan" class="promo-block-text"></p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-dribbble"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-behance"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <div class="promo-block-img-wrap">
                            <img id = "home_gambar" class="promo-block-img img-responsive" align="Avatar">
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
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
        function ambilDataDariAPI() {
            axios.get('api1.php?id=1') 
                .then(response =>{
                    //definisikan constanta data
                    const data = response.data;
                    //manipulasi html utk menampilkan data
                    document.getElementById('home_nama').textContent = data.nama;
                    document.getElementById('home_pekerjaan').textContent = data.pekerjaan;
                    document.getElementById('home_gambar').src = data.gambar; 
                })

                .catch(error => {
                    console.error('Error:', error);
                });
            }
        ambilDataDariAPI();
    </script>
</body>
</html>
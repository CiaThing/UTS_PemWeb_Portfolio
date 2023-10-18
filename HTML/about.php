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
        <style>
            #aboutpage_pekerjaan,
            #aboutpage_deskripsi_singkat_pekerjaan,
            #aboutpage_tanggal_lahir,
            #aboutpage_website,
            #aboutpage_nomor_telp,
            #aboutpage_kota,
            #aboutpage_umur,
            #aboutpage_gelar_lulusan,
            #aboutpage_email,
            #aboutpage_freelance,
            #aboutpage_deskripsi_rinci {
                color: black;
            }
        </style>
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
        <!-- About -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>About</h2>
        <p id = "aboutpage_deskripsi_about"></p>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <img id="foto_profil" class="img-fluid" alt="" width="350" height="350">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content">
          <h3 id="aboutpage_pekerjaan"></h3>
          <p  id = "aboutpage_deskripsi_singkat_pekerjaan"class="fst-italic"></p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span id="aboutpage_tanggal_lahir"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span id="aboutpage_website"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span id="aboutpage_nomor_telp"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span id="aboutpage_kota"></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span id="aboutpage_umur"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span id="aboutpage_gelar_lulusan"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span id="aboutpage_email"></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span id="aboutpage_freelance"></span></li>
              </ul>
            </div>
          </div>
          <p id="aboutpage_deskripsi_rinci"></p>
        </div>
      </div>

    </div>
  </section>
        <!-- End About -->
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
        function ambilDataDariAPIabout_page() {
        axios.get('api2.php?id=1') 
            .then(response =>{
                //definisikan constanta data
                const data = response.data;
                //manipulasi html utk menampilkan data
                document.getElementById('aboutpage_deskripsi_about').textContent = data.deskripsi_about;
                document.getElementById('aboutpage_pekerjaan').textContent = data.pekerjaan; 
                document.getElementById('aboutpage_deskripsi_singkat_pekerjaan').textContent = data.deskripsi_singkat_pekerjaan;
                document.getElementById('aboutpage_tanggal_lahir').textContent = data.tanggal_lahir;
                document.getElementById('aboutpage_website').textContent = data.website;
                document.getElementById('aboutpage_nomor_telp').textContent = data.nomor_telp; 
                document.getElementById('aboutpage_kota').textContent = data.kota;
                document.getElementById('aboutpage_umur').textContent = data.umur;
                document.getElementById('aboutpage_gelar_lulusan').textContent = data.gelar_lulusan;
                document.getElementById('aboutpage_email').textContent = data.email;
                document.getElementById('aboutpage_freelance').textContent = data.freelance;
                document.getElementById('aboutpage_deskripsi_rinci').textContent = data.deskripsi_rinci;
                document.getElementById('foto_profil').src = data.gambar;
            })

            .catch(error => {
                console.error('Error:', error);
            });
        }
        ambilDataDariAPIabout_page();
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>UIZ-CONTACT</title>
    <!-- Preloader -->
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%;
            }

            100% {
                width: 0;
                height: 0;
            }
        }

        body>div.preloader {
            position: fixed;
            background: white;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body:not(.loaded)>div.preloader {
            opacity: 1;
        }

        body:not(.loaded) {
            overflow: hidden;
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards;
        }
        
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector('body').classList.add('loaded');
            }, 300);
        });
    </script>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.png" type="image/png"><!-- Font Awesome -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- Quick CSS -->
    <link rel="stylesheet" href="assets/css/quick-website.css" id="stylesheet">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modal-cookies" data-backdrop="false" aria-labelledby="modal-cookies" aria-hidden="true">
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class="modal-body">
                    <!-- Text -->
                    <p class="text-sm text-white mb-3">
                        We use cookies so that our themes work for you. By using our website, you agree to our use of cookies.
                    </p>
                    <!-- Buttons -->
                    <a href="pages/utility/terms.html" class="btn btn-sm btn-white" target="_blank">Learn more</a>
                    <button type="button" class="btn btn-sm btn-primary mr-2" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="position: fixed;top: 0;width:100%;">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand" href="index.html">
                <img alt="Image placeholder" src="assets/img/logo.png" style="width: 80px;height: auto;" id="navbar-logo">
            </a>
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="acceuil">Acceuil</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recherche</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="publication" class="dropdown-item">Publication</a>
                            <a href="evenement" class="dropdown-item">Evénenement</a>
                            <a href="equipement" class="dropdown-item">Equipement</a>
                           
                            
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Laboratoire</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="acceuil#mdd" class="dropdown-item">Mot du directeur</a>
                            <a href="acceuil#aap" class="dropdown-item">Appel à projet</a>
                            <a href="acceuil#adl" class="dropdown-item">Architecture du laboratoires</a>
                           
                            
                        </div>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                </ul>
                <!-- Button -->
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="http://localhost/backend/index.php/Welcome/login_view">
                    Espace Personnel
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="http://localhost/backend/index.php/Welcome/login_view" class="btn btn-block btn-sm btn-warning">Espace personnel</a>
                </div>
            </div>
        </div>
    </nav>

    <main style="margin-top: 100px;">
        <h4 style="text-align: center;">Contact</h4>


    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-lg-5">
                    <h3>B.P 8106, Agadir 80000</h3>
                    <p class="lead my-4">
                        E: <a href="#">exemple@example.com</a><br>
                        T: 1234567900
                    </p>
                    
                </div>
                <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2770420907946!2d-9.546235247550234!3d30.40604439865912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb3c82aa3d6fe31%3A0x8ef661d2ccb5a617!2sFaculty%20of%20Science%2C%20Ibn%20Zohr!5e0!3m2!1sen!2sma!4v1654596473023!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
            </div>
        </div>
    </section>


    <section class="slice slice-lg" id="sct-form-contact">
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Nous contacter</h3>
                </div>
                <?php echo @$error; ?>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Form -->
                    <form method="post" action="contact">
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="text" placeholder="Nom" required name="nom">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-lg" type="email" placeholder="email@example.com" required name="email">
                        </div>
                        
                        <div class="form-group">
                            <textarea class="form-control form-control-lg" placeholder="Votre massage ..." rows="3" required name="message"></textarea>
                        </div>
                        <div class="text-center">
                            <!-- <div class="g-recaptcha" data-sitekey="6Lfs5ScUAAAAANAJwGrdfvWLFRRiVbKRE2vfoaFj"></div> -->
                            <input type="submit" class="btn btn-block btn-lg btn-primary mt-4" name="envoyer" valur="Envoyer votre message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
    </main>
    <footer class="position-relative" id="footer-main">
    <div class="footer pt-lg-7 footer-dark bg-dark">
        <!-- SVG shape -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class=" fill-section-secondary">
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
        </div>
        <!-- Footer -->
        <div class="container pt-4">
            <div class="row">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <!-- Theme's logo -->
                    <a href="index.html">
                        <img alt="Image placeholder" src="assets/img/logo.png" style="width: 300px;height: auto;" id="footer-logo">
                    </a>
                    <!-- Webpixels' mission -->
                    <!-- Social -->
                    <ul class="nav mt-4">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="https://dribbble.com/laboUIZ" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/laboUIZ" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/laboUIZ" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/laboUIZ" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Acceuil</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Laboratoire</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Mot du directeur</a></li>
                        <li><a href="#">Offres</a></li>
                        <li><a href="#">Archaticteur</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Recherche</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Publication</a></li>
                        <li><a href="#">Evenement</a></li>
                        <li><a href="#">Equipement</a></li>
                    </ul>
                </div>
            </div>
            <hr class="divider divider-fade divider-dark my-4">
            <div class="row align-items-center justify-content-md-between pb-4">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2020 <a href="#" class="font-weight-bold" target="_blank">LaboUIZ</a>. Tous Droits Reserves
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Core JS  -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/svg-injector/dist/svg-injector.min.js"></script>
<script src="assets/libs/feather-icons/dist/feather.min.js"></script>
<!-- Quick JS -->
<script src="assets/js/quick-website.js"></script>
<!-- Feather Icons -->
<script>
    feather.replace({
        'width': '1em',
        'height': '1em'
    })
</script>
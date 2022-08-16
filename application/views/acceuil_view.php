<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>UIZ-Acceuil</title>
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
                <a class="navbar-btn btn btn-sm btn-primary d-none d-lg-inline-block ml-3" href="login_page">
                    Espace Personnel
                </a>
                <!-- Mobile button -->
                <div class="d-lg-none text-center">
                    <a href="http://localhost/backend/index.php/Welcome/login_view" class="btn btn-block btn-sm btn-primary">Espace personnel</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <section class="slice py-7">
        <div class="container">
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2 text-center">
                    <!-- Image -->
                    <figure class="w-100">
                        <img alt="Image placeholder" src="assets/img/svg/illustrations/illustration-3.svg" class="img-fluid mw-md-120">
                    </figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <!-- Heading -->
                    <h1 class="display-4 text-center text-md-left mb-3">
                        Bienvenue sur la plateforme du <strong class="text-primary">
                            Laboratoire IRF – SIC
                        </strong>
                    </h1>
                    <!-- Text -->
                    <p class="lead text-center text-md-left text-muted">
                        Laboratoire Image et Reconnaissance de Formes –
                        Systèmes Intelligents et Communicants | Faculté des sciences Agadir </p>
                    <!-- Buttons -->
                    <div class="text-center text-md-left mt-5">
                        <a href="https://webpixels.io/themes/quick-free-bootstrap-theme" class="btn btn-primary btn-icon" target="_blank">
                            <span class="btn-inner--text">Nous contacter</span>
                            <span class="btn-inner--icon"><i data-feather="chevron-right"></i></span>
                        </a>
                        <a href="https://webpixels.io/illustrations" class="btn btn-neutral btn-icon d-none d-lg-inline-block" target="_blank">offre Projets</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg pt-lg-6 pb-0 pb-lg-6 bg-section-secondary">
        <div class="container">
            <!-- Title -->
            <!-- Section title -->
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-12" id="adl">
                    <span class="badge badge-soft-success badge-pill badge-lg">
                        laboratoire IRF – SIC
                    </span>
                    <br>
                    <br>
                    <p style="text-align: left;">Les thèmes de recherches de l’équipe Image et Reconnaissance de Formes sont liés à l’analyse au
                        traitement d’images et à la reconnaissance de formes avec différentes applications : Extraction de
                        l’information de documents, reconnaissance de caractères, vérification de signatures
                        manuscrites, compression d’images, tatouage d’images, Analyse de vidéo et suivi de mouvement
                        et analyse des images thermiques biomédicales. Plusieurs thèses ont été soutenues sur ces
                        thématiques et d’autres sont en cours.
                    </p>
                    <p style="text-align: left;">
                        Des membres de l’équipe sont des intervenants dans ces thématiques dans plusieurs formations de
                        Master : Master Mathématiques Appliquées et Sciences de l’Ingénieur (MASI) du département
                        de Mathématiques, Master managment des systèmes d’information (MSI) à l’ENCG Agadir.
                    </p>

                    <p style="text-align: left;">
                        L‘équipe fait partie des structure de la Formation doctorale ‘Mathématiques, Informatique et
                        Applications’ du CED Ibn Zohr avec un nombre conséquent d’encadrement, de soutenances et de
                        cotutelles.
                    </p>

                    <p style="text-align: left;">
                        L’équipe est impliquée dans plusieurs projets de recherches nationaux et internationaux :
                        Horison2020, PPR2, Toubkal, Projets UIZ
                    </p>

                    <p style="text-align: left;">
                        Pour les 4 prochaines années, l’équipe continuera sur la même lancée en développant ces axes de
                        recherche et leurs applications et en renforçant ses partenariats académiques et socioéconomiques.

                    </p>
                    <h2 class=" mt-4">Architecture du laboratoire</h2>
                    <div class="mt-6">
                        <p class="lead lh-180"></p>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">Hassan Douzi</h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Mathématiques et Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FS Agadir </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">Driss Mammass </h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Mathématiques et Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FS Agadir </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">Mostafa El Yassa</h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Mathématiques et Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FS Agadir </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">Soufiane Idbraim</h5>
                            <p class="text-muted mb-0">Grade:PH </p>
                            <p class="text-muted mb-0">Spécialité:Mathématiques et Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FS Agadir </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">
                                Amal Battou</h5>
                            <p class="text-muted mb-0">Grade:PH </p>
                            <p class="text-muted mb-0">Spécialité:Mathématiques et Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FS Agadir </p>
                        </div>
                    </div>
                </div>


                



                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">

                                Chihab Eddine
                                Cherkaoui
                                Eddahabi
                            </h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Informatique</p>
                            <p class="text-muted mb-0">Etablissement:ENCG Agadir </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">


                                Youssef Essaady
                            </h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Informatique</p>
                            <p class="text-muted mb-0">Etablissement:FP Taroudant </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-5">

                            <h5 class="h4 lh-130 mb-3">


                                Ali EL
                                MEZOUARY
                            </h5>
                            <p class="text-muted mb-0">Grade:PES </p>
                            <p class="text-muted mb-0">Spécialité:Informatique</p>
                            <p class="text-muted mb-0">Etablissement:EST Agadir </p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <section class="slice slice-lg" id="mdd">
        <div class="container">
            <div class="py-6">
                <div class="row row-grid justify-content-between align-items-center">
                    <div class="col-lg-5 order-lg-2">
                        <h5 class="h3">Mot du président</h5>
                        <p class="lead my-4">
                            Chers partenaires,

                            Nous sommes particulièrement heureux de vous accueillir sur notre site institutionnel pour une relation de proximité et aussi pour s’inscrire dans une relation d’échange perpétuel et constructif avec vous.

                            Le contenu a été élaboré pour mettre en évidence notamment les atouts majeurs de notre institution, les axes stratégiques et les principaux chiffres financiers, témoignant de la solidité de nos fondamentaux.

                            Notre site institutionnel est désormais une plateforme d’échange, et un canal de communication dans notre dispositif global, mis au service de nos partenaires.

                            La SCR a pu confirmer son positionnement en tant que Réassureur de référence au Maroc et a entamé un

                            Nouveau plan stratégique 2021-2023 « TRANSFORM TOMORROW TOGETHER » par abréviation 3T basé sur 4 piliers et 8 axes, visant à renforcer le positionnement de la SCR au niveau National et International.

                        </p>
                        <!--<ul class="list-unstyled mb-0">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-file-invoice"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for modern startups</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Ready to be customized</span>
                                    </div>
                                </div>
                            </li>
                        </ul>-->
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="card mb-0 mr-lg-5">
                            <div class="card-body p-2">
                                <img alt="Image placeholder" src="assets/img/ass.jpg" class="img-fluid shadow rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </section>
    <section class="slice slice-lg bg-section-dark pt-5 pt-lg-8" id="aap">
        <!-- SVG separator -->
        <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
            <svg width="2560px" height="100px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100;" xml:space="preserve" class="">
                <polygon points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <!-- Container -->
        <div class="container position-relative zindex-100">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-10 text-center">
                        <div class="mt-4 mb-6">
                            <h2 class="h1 text-white">
                                Appel à projet
                            </h2>
                            <h4 class="text-white mt-3">Postuler à un projet</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice pt-0">
        <div class="container position-relative zindex-100">
            <div class="row">
                <?php $que = $this->db->query("select * from projet") ?>
                <?php
                foreach ($que->result() as $x)
                    echo "
                <div class='col-xl-6 col-sm-6 mt-n7'>
                    <div class='card'>
                    
                        <div >
                            
                        <div>
                        <span class='badge badge-warning badge-pill'>Dernier delai : " . $x->date . "</span>
                    </div>
                            <div class='pl-4'>
                                <h5 class='lh-130'>" . $x->sujet . "</h5>
                                <p class='text-muted mb-0'>
                                " . $x->desc . "
                                </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                "
                ?>

    </section>
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <span class="badge badge-primary badge-pill">Chiffres et statistiques</span>
                </div>
                
            </div>
            <!-- Features -->

            <br>
            <div class="row mx-lg-n4">
                <!-- Features - Col 1 -->
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">5 equipe</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-primary text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">17 professeur</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-danger text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">25 post doc</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-success text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">Deux projet</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-info text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">45 etudiant master et stagiaire</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 px-lg-4">
                    <div class="card shadow-none">
                        <div class="p-3 d-flex">
                            <div>
                                <div class="icon icon-shape rounded-circle bg-warning text-white mr-4">
                                    <i data-feather="check"></i>
                                </div>
                            </div>
                            <div>
                                <span class="h6">23 sujet de recherche</span>
                                <p class="text-sm text-muted mb-0">
                                    Built to be customized.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Features - Col 3 -->

            </div>
    </section>

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
</body>

</html>
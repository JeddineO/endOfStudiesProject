<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">
    <title>UIZ-EQUIPEMENTS</title>
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
        <h4 style="text-align: center;">Equipement</h4>

        <div class="col-12 " style="display: block;margin-right: auto;margin-left: auto;width: 60%;">

            <div class="container search">
                <div class="row">
                    <div class="col-12 ">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                
                            </div>

                            
                            <span class="input-group-btn">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main>

            <div class='row mt-5'>
                <?php foreach ($pubs as $pub)
                    echo "
                <div class='col-md-4'>
                    <div class='card  bg-light' >
                        <div class='card-body pb-5'>
                            <div class='pt-4 pb-5'>
                                <img src='links/" . $pub->image . "' class='img-fluid img-center' style='height: 150px;' alt='Illustration'>
                            </div>
                            <h5 class='h4 lh-130 mb-3'>" . $pub->model . "</h5>
                            <p class='text-muted mb-0'>" . $pub->tag . "</p>
                        </div>
                    </div>
                </div>
                " ?>

        </main>
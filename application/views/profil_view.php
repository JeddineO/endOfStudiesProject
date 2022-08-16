<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="esp/fonts/icomoon/style.css">

    <link rel="stylesheet" href="esp/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="esp/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="esp/css/style.css">

    
<style type="text/css">
body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

</style>
    <title>UIZ-EspacePersonnel</title>


</head>

<body>


    <aside class="sidebar">
        <div class="toggle">
            <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar" >
                <span></span>
            </a>
        </div>
        
        <div class="side-inner">

            <div class="profile">
                <img src="links/profile/<?php echo  $_SESSION['image'] ?>" alt="Image" class="img-fluid" style="hight:200px;">
                <h3 class="name"><?php echo $_SESSION['nom'] . " " . $_SESSION['prenom'] ?></h3>
                <span class="country"><?php echo $_SESSION['position'] ?></span>
            </div>

           

            <div class="nav-menu">
                <ul>
                    <li><a href="acceuil"><span class="icon-home mr-3"></span>Acceuil</a></li>
                    <li class="active"><a href="profil"><span class="icon-search2 mr-3"></span>Mes information</a></li>
                    <li><a href="pub_profil"><span class="icon-notifications mr-3"></span>Mes publication</a></li>
                    <li><a href="#"><span class="icon-location-arrow mr-3"></span>Mes projets</a></li>
                    <li><a href="operation"><span class="icon-pie-chart mr-3"></span>Mes operations</a></li>
                    <li><a href="login_page"><span class="icon-sign-out mr-3"></span>Déconnexion</a></li>
                </ul>
            </div>
        </div>

    </aside>


    <h1 style="position: fixed; top: 40px;left :80px;">Mes informations</h1>

<div  >
    <div class="main-body" >
        
          <div class="row gutters-sm" style="margin-top: 80px;">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="links/profile/<?php echo  $_SESSION['image'] ?>" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $_SESSION['nom'] ."  " . $_SESSION['prenom']?></h4>
                      <p class="text-muted font-size-sm"><?php echo $_SESSION['email']?></p>

                      <p class="text-secondary mb-1"><b><?php echo $_SESSION['position'] ?></b></p>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['nom']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Prénom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['prenom']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date de naissance</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['date']?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Tel</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['tel'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['adresse'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Diplome</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['diplome'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Spésialité</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['spesialite'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Promotion</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['promotion'] ?>
                    </div>
                  </div>
                  <hr>
                  <p style="color: green;">Informations de connexion</p>
                  <br>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['email'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mot de passe</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $_SESSION['password'] ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info "  href="editer">Modifier</a>
                      <button type="button" class="btn btn-success" onclick="window.print()">Imprimer</button>
                    </div>
                  </div>
                </div>
              </div>

              


            </div>
          </div>

        </div>
    </div>


<script type="text/javascript">

</script>
<script src="esp/js/jquery-3.3.1.min.js"></script>
    <script src="esp/js/popper.min.js"></script>
    <script src="esp/js/bootstrap.min.js"></script>
    <script src="esp/js/main.js"></script>
</body>
</html>
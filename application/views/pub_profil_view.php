<?php 
$string=$_SESSION['nom'] . " " . $_SESSION['prenom'];
$pub = $this->db->query("select * from publication where wrt like '%$string%'  ");
?>
<!doctype html>
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

<style>
    .card {
            background: wheat;
            cursor: pointer;
            
            
        }
        .card p{
            font-weight: 600;

        }
</style>
<title>UIZ-EspacePersonnel</title>


</head>

<body>


<aside class="sidebar">
    <div class="toggle">
        <a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
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
                <li><a href="profil"><span class="icon-search2 mr-3"></span>Mes information</a></li>
                <li  class="active"><a href="pub_profil"><span class="icon-notifications mr-3"></span>Mes publication</a></li>
                <li><a href="#"><span class="icon-location-arrow mr-3"></span>Mes projets</a></li>
                <li><a href="#"><span class="icon-pie-chart mr-3"></span>Mes operations</a></li>
                <li><a href="login_page"><span class="icon-sign-out mr-3"></span>Déconnexion</a></li>
            </ul>
        </div>
    </div>

</aside>
<main>
   

  <div class="site-section">
      
<h1 style="position: fixed; top: 20px;left :80px;z-index:2;">Publications</h1>
    <div class="container">
    <h4>Les publications de <b><?php echo strtoupper( $_SESSION['nom'] . " " . $_SESSION['prenom'] )?></b>  ,le <b><?php echo date("Y/m/d") ?></b> <button type="button" class="btn btn-success" onclick="window.print()">Imprimer</button></h4>

    
    
        <?php foreach($pub->result() as $pub)
echo "
        <div class='col-12' style='padding:6px;'>
            <div class='card'>
                <div class='card-body pb-5'>
                    <p class='text-dark mb-0'>".$pub->wrt." , ".$pub->titre." ,".$pub->journal." <a class='text-muted mb-0' href='#'>".$pub->ref."</a>
                   ".$pub->date."</p>
                </div>
            </div>
        </div>
        <br>
        ";
        ?>

        
      <div class="row justify-content-center">
          
          
</main>



<script src="esp/js/jquery-3.3.1.min.js"></script>
<script src="esp/js/popper.min.js"></script>
<script src="esp/js/bootstrap.min.js"></script>
<script src="esp/js/main.js"></script>
</body>

</html>
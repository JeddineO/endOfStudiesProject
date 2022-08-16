


<?php 
$equipe=$_SESSION['equipe'];
$news = $this->db->query("select * from equipe where titre='$equipe' ");
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



<title>UIZ-EspacePersonnel</title>


</head>

<body>


<div class="preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


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
                <li class="active"><a href="acceuil"><span class="icon-home mr-3"></span>Acceuil</a></li>
                <li><a href="profil"><span class="icon-search2 mr-3"></span>Mes information</a></li>
                <li><a href="#"><span class="icon-notifications mr-3"></span>Mes publication</a></li>
                <li><a href="#"><span class="icon-location-arrow mr-3"></span>Mes projets</a></li>
                <li><a href="#"><span class="icon-pie-chart mr-3"></span>Mes operations</a></li>
                <li><a href="login_page"><span class="icon-sign-out mr-3"></span>Déconnexion</a></li>
            </ul>
        </div>
    </div>

</aside>
<main>
   

  <div class="site-section">
      
<h1 style="position: fixed; top: 20px;left :80px;">Mon equipe</h1>
    <div class="container">
    <?php
        $i = 0;
        foreach ($news->result() as $new) {
            $i++;
            if ($i > 3) break;
            echo "
            
        <div class='' style='border:1px solid black';>
            <div class='bg-primary' >
              <h3 style='padding:6px;'>  " . $new->titre . "</h3>
            </div>
            
            <div class=''>
               <p style='color:black;'> " . $new->descr . "</p>
            </div>
            <p style='padding:8px;font-size:16px;color:white' class='bg-dark'>" . $new->chef . "</p>
        </div>
        <br>
        ";
        } ?>

<?php
        $membres = $this->db->query("select * from membre where position !='admin'");
        ?>

        <?php

        if($_SESSION['position']=='prof')

        echo "<h3 style='padding:6px;'>Ajouter membre a l'equipe</h3>";
        
        echo" <select id='inputState' class='form-control' name='chef' required>";
       
         foreach ($membres->result() as $membre)
            echo
            "
        <option>" . $membre->nom . " " . $membre->prenom . "</option>
        ";

       echo" <br> <br> <input type='submit' class=' btn btn-primary' value='ajouter' name='ajouterE'>";

        ?>
        
    </select>
        

        
      <div class="row justify-content-center">
          
          
</main>



<script src="esp/js/jquery-3.3.1.min.js"></script>
<script src="esp/js/popper.min.js"></script>
<script src="esp/js/bootstrap.min.js"></script>
<script src="esp/js/main.js"></script>
</body>

</html>
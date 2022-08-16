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
		.sidebar {
			<?php /*if ($_SESSION['position'] == 'prof') echo 'background-color: green;' ?>
            <?php if ($_SESSION['position'] == 'master') echo 'background-color: blue;' ?>
            <?php if ($_SESSION['position'] == 'postdoc') echo 'background-color: red;' ?>
            <?php if ($_SESSION['position'] == 'stagiaire') echo 'background-color: gray;' ?>
            <?php if ($_SESSION['position'] == 'doctorant') echo 'background-color: black;' */ ?>
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
					<li class="active"><a href="profil"><span class="icon-search2 mr-3"></span>Mes information</a></li>
					<li><a href="pub_profil"><span class="icon-notifications mr-3"></span>Mes publication</a></li>
					<li><a href="#"><span class="icon-location-arrow mr-3"></span>Mes projets</a></li>
					<li><a href="operation"><span class="icon-pie-chart mr-3"></span>Mes operations</a></li>
					<li><a href="login_page"><span class="icon-sign-out mr-3"></span>Déconnexion</a></li>
				</ul>
			</div>
		</div>

	</aside>

<style>h1{
	background: #fff;
}</style>

	<body>
	<h1 style="position: fixed; top: 40px;left :80px;z-index:2;">Modifier mes informations</h1>



	
		<form action="login" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo  $_SESSION['id'] ?>">
			<div class="container">
				<div class="main-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="card" style="margin-top: 100px;">
								<div class="card-body">
									<div class="d-flex flex-column align-items-center text-center">
										<img src="links/profile/<?php echo  $_SESSION['image'] ?>" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
										<div class="mt-3">
											<h4><?php echo $_SESSION['nom'] . "  " . $_SESSION['prenom'] ?></h4>
											<p class="text-muted font-size-sm"><?php echo $_SESSION['email'] ?></p>

											<p class="text-secondary mb-1"><b><?php echo $_SESSION['position'] ?></b></p>
										</div>
									</div>
									<hr class="my-4">

								</div>
							</div>
						</div>
						<div class="col-lg-8" style="margin-top: 100px;">
							<div class="card">
								<div class="card-body">
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Nom</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="nom" id="nom" value="<?php echo $_SESSION['nom'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Prénom</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="prenom" id="prenom" value="<?php echo $_SESSION['prenom'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Date de naissance</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="date" id="date" value="<?php echo $_SESSION['date'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Tel</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="tel" id="tel" value="<?php echo $_SESSION['tel'] ?>">
										</div>
									</div>

									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Address</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="adress" id="adress" value="<?php echo $_SESSION['adresse'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Diplome</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="diplome" id="diplome" value="<?php echo $_SESSION['diplome'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Spesialite</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="spesialite" id="spesialite" value="<?php echo $_SESSION['spesialite'] ?>">
										</div>
									</div>
									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Promotion</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="promotion" id="promotion" value="<?php echo $_SESSION['promotion'] ?>">
										</div>
									</div>

									<p>Informations de connexion</p>

									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Email</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="mail" id="mail" value="<?php echo $_SESSION['email'] ?>">
										</div>
									</div>
									

									<div class="row mb-3">
										<div class="col-sm-3">
											<h6 class="mb-0">Mot de passe</h6>
										</div>
										<div class="col-sm-9 text-secondary">
											<input type="text" class="form-control" name="password" id="password" value="<?php echo $_SESSION['password'] ?>">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-3"></div>
										<div class="col-sm-9 text-secondary">
											<input type="submit" class="btn btn-primary px-4" value="Enregistrer les modifications" name="editer">
										</div>
									</div>
		</form>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">

			</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>

		<style type="text/css">
			body {
				background: #f7f7ff;
				margin-top: 20px;
			}

			.card {
				position: relative;
				display: flex;
				flex-direction: column;
				min-width: 0;
				word-wrap: break-word;
				background-color: #fff;
				background-clip: border-box;
				border: 0 solid transparent;
				border-radius: .25rem;
				margin-bottom: 1.5rem;
				box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
			}

			.me-2 {
				margin-right: .5rem !important;
			}
		</style>

		<script type="text/javascript"></script>


		<script type="text/javascript"></script>
		<script src="esp/js/jquery-3.3.1.min.js"></script>
		<script src="esp/js/popper.min.js"></script>
		<script src="esp/js/bootstrap.min.js"></script>
		<script src="esp/js/main.js">
		</script>

		</script>
	</body>

</html>
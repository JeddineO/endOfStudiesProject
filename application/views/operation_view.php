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

    <script src="esp/js/jquery-3.3.1.min.js"> </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/css/bootstrap-select.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.8.1/js/bootstrap-select.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


    <style>
        body {
            padding: 0px;
        }

        main {
            min-height: 100vh;
            padding: 30px;
        }

        summary {
            font-weight: 600;
            font-family: sans-serif;
            font-size: 18px;
        }

        details {
            background: #dadae1;
            padding: 10px;
            margin: 10px;
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
                    <li><a href="pub_profil"><span class="icon-notifications mr-3"></span>Mes publication</a></li>
                    <li><a href="#"><span class="icon-location-arrow mr-3"></span>Mes projets</a></li>
                    <li class="active"><a href="operation"><span class="icon-pie-chart mr-3"></span>Mes operations</a></li>
                    <li><a href="login_page"><span class="icon-sign-out mr-3"></span>Déconnexion</a></li>
                </ul>
            </div>
        </div>

    </aside>
    <main class="container">
        <br><br>
        <?php echo @$error; ?>
        <h1 style="position: fixed; top: 10px;left :80px;">Mes operations</h1>
        <details style="margin-top: 50px;">
            <summary>Ajouter publication</summary>
            <form action="operation" method="post">
                <div class="row">
                    <div class="col-6">
                        <label for="nom">Titre</label>
                        <input type="text" class="form-control" placeholder="-------" name="titre" required>
                    </div>
                    <div class="col-6">
                        <script>
                            function myFunction() {
                                var x = document.getElementById("mySelect").value;
                                document.getElementById("choix").value += "#" + x;
                            }
                        </script>
                        <label for="mySelect">Auteurs</label>
                        <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" required>
                            <?php
                            $que = $this->db->query("select nom,prenom from membre");
                            foreach ($que->result() as $name)
                                echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                            ?>
                        </select>
                        <br>

                    </div>
                </div>
                <label for="nom">Date</label>
                <input type="date" class="form-control" placeholder="-------" name="date" required>
                <label for="nom">Journal</label>
                <input type="text" class="form-control" placeholder="-------" name="journal" required>
                <label for="nom">Ref</label>
                <input type="text" class="form-control" name="ref" value="xxxxxxxxx" id="ref" placeholder="-------">

                <br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="submit" value="Publier">
            </form>
        </details>

        <details>
            <summary>projet de recherche</summary>
            <br>
            <form action="projects" method="post">
                <details style="background-color: #fff;">
                    <summary>Nouveau projet</summary>
                    <label for="Sujet">Sujet</label>
                    <input type="test" class="form-control" placeholder="-------" name="sujet" required>

                    <label for="nom">Description</label>
                    <input type="text" class="form-control" placeholder="-------" name="descr" required>
                    <br>
                    <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="projetR" value="Publier">
                </details>
            </form>

            <details style="background-color: #fff">
                <br>
                <summary>Ajouter membre</summary>

                <label for="nom">Projet</label>
                <select class="form-control" name="wrt[]" required>
                    <?php
                    $que = $this->db->query("select sujet from projetrechercher ");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->sujet . " '>" . $name->sujet . "</option>";
                    ?>
                </select>


                <label for="nom">Professeur</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" required>
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='prof'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>

                <label for="nom">PostDoc</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" required>
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='postdoc'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>
                <br><br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="sujetR" value="Ajouter">

            </details>



        </details>

        <details>
            <summary>sujets thése</summary>

            <br>
            <form action="projects" method="post">

                <details style="background-color: #fff;">
                    <summary>Nouveau projet</summary>
                    <label for="Sujet">Sujet</label>
                    <input type="test" class="form-control" placeholder="-------" name="sujet" required>

                    <label for="nom">Description</label>
                    <input type="text" class="form-control" placeholder="-------" name="descr" required>
                    <br>
                    <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="sujetT" value="Publier">
                </details>
            </form>
            <form action="projects" method="post">

            <details style="background-color: #fff;">
                <br>
                <label for="nom">Sujet</label>
                <select class="form-control" name="sujet" required>
                    <?php
                    $que = $this->db->query("select sujet from projetrechercher ");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->sujet . " '>" . $name->sujet . "</option>";
                    ?>
                </select>
                <summary>Ajouter membre</summary>
                <label for="nom">Professeur</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="prof[]" >
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='prof'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>

                <label for="nom">Doctorant</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="doc[]" >
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='doctorant'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>
                <br><br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="membreST" value="Ajouter">

            </details>
            </form>





        </details>

        <details>
            <summary>sujet de recherche</summary>


            <br>
            <form action="projects" method="post">

                <details style="background-color: #fff;">
                    <summary>Nouveau projet</summary>
                    <label for="Sujet">Sujet</label>
                    <input type="test" class="form-control" placeholder="-------" name="sujet" required>

                    <label for="nom">Description</label>
                    <input type="text" class="form-control" placeholder="-------" name="descr" required>
                    <br>
                    <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="sujetR" value="Publier">
                </details>
            </form>
            <details style="background-color: #fff;">
                <br>
                <summary>Ajouter membre</summary>

                <label for="nom">Sujet</label>
                <select class="form-control" name="wrt[]" required>
                    <?php
                    $que = $this->db->query("select sujet from projetrechercher ");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->sujet . " '>" . $name->sujet . "</option>";
                    ?>
                </select>
                <label for="nom">Professeur</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" >
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='prof'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>

                <label for="nom">Master</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" require_once>
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='master'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>

                <label for="nom">Stagiaire</label>
                <select class="form-control" class="selectpicker" multiple data-live-search="true" name="wrt[]" required>
                    <?php
                    $que = $this->db->query("select nom,prenom from membre where position='Stagiaire'");
                    foreach ($que->result() as $name)
                        echo "<option value='" . $name->nom . " " . $name->prenom . "'>" . $name->nom . " " . $name->prenom . "</option>";
                    ?>
                </select>
                <br><br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="sujetR" value="Ajouter">

            </details>


        </details>

        <details>
            <summary>Appell a projet</summary>
            <form action="operation" method="post">
                <div class="row">
                    <div class="col-6">
                        <label for="nom">Sujet</label>
                        <input type="text" class="form-control" placeholder="-------" name="titre" required>
                    </div>

                </div>
                </div>
                <label for="nom">Description</label>
                <textarea type="text" class="form-control" placeholder="-------" name="tag" required></textarea>
                <label for="nom">Dernier Delai</label>
                <input type="date" name="date" class="form-control" cols="30" rows="10" placeholder="-------"> </textarea>

                <br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;" type="submit" name="projet" value="Publier">
            </form>

        </details>

        <details>
            <summary>Nouveau equipement</summary>
            <?php echo form_open_multipart('operation') ?>

            <div class="row">
                <div class="col-6">
                    <label for="nom">Model</label>
                    <input type="text" class="form-control" placeholder="-------" name="model" required>
                </div>

            </div>
            </div>
            <label for="nom">Description</label>
            <textarea type="text" class="form-control" placeholder="-------" name="desc" required></textarea>
            <label for="nom">image</label>
            <input type="file" name="image" class="form-control" size="20">

            <br>
            <input class="btn btn-primary" style="display:block;margin-left:auto; marging-right:auto;" type="submit" name="equiper" value="Publier">
            </form>
        </details>

        <details>
            <summary>announcer un evenenment</summary>
            <form action="operation" method="post">
                <div class="row">
                    <div class="col-6">
                        <label for="nom">Sujet</label>
                        <input type="text" class="form-control" placeholder="-------" name="sujet" required>
                    </div>
                    <div class="col-6">
                        <label for="inputState">Date</label>
                        <input type="date" class="form-control" placeholder="-------" name="date" required>


                    </div>


                </div>
                <div class="row">
                    <div class="col-6" class="form-control">
                        <label for="nom">Type</label>
                        <select name="type" class="form-control">
                            <option>Seminair</option>
                            <option>Conférence</option>
                            <option>Colloque</option>
                            <option>Congrè</option>
                            <option>Journées</option>
                            <option>Forum</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="inputState">Image</label>
                        <input type="file" class="form-control" name="image">


                    </div>

                    <div class="col-6">
                        <label for="inputState">Lieu</label>
                        <input type="text" class="form-control" name="lieu">


                    </div>


                </div>
                <label for="nom">Description</label>
                <textarea type="text" class="form-control" placeholder="-------" name="desc" required></textarea>



                <br>
                <input class="btn btn-primary" style="display:block;margin-left:auto;marging-right:auto;" type="submit" name="event" value="Publier">
            </form>
        </details>
    </main>

</body>

</html>
<script>
    $('select').selectpicker();
</script>
<script src="esp/js/jquery-3.3.1.min.js"></script>
<script src="esp/js/popper.min.js"></script>
<script src="esp/js/bootstrap.min.js"></script>
<script src="esp/js/main.js"></script>
<?php foreach ($master as $user) { ?>
        <?php $_SESSION['mail'] = $user->email ?>
        <?php $_SESSION['position'] = $user->position ?>
        <?php $_SESSION['id_membre'] = $user->id_membre ?>
    <?php $_SESSION['password'] = $user->password;
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../../links/style.css">
    <link rel="shortcut icon" href="links/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="esp/css/bootstrap.min.css">
    <title>Formulaire d'inscription</title>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        .img {
            width: 200px;
            background: #024d93;
            border-radius: 100%;
            display: block;
            margin-left: auto;
            margin-right: auto;
            
        }
        .header {
            padding: 10px;
            color: #0d6efd;
            font-family: sans-serif;
            display: block;
            margin-left: auto;
            margin-right: auto;

        }

        h4 {
            text-align: center;
            color: #024d93;
            font-family: sans-serif;
            font-size: xx-large;
            font-weight: 700;
        }

        .condition {
            background: rgb(218, 214, 214);
            margin-top: 10px;
            padding: 10px;
        }

        h2 {
            background: #0d6efd;
            width: 99%;
            color: white;
            font-family: sans-serif;
            padding: 4px;
            text-align: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .form {

            padding: 1%;
            margin: 3px;
            background: #0202021c;
            background: #fff;
        }

        h3 {
            background: rgba(168, 168, 168, 0.295);
            font-size: 14px;
            margin-top: 10px;
            padding: 5px;

        }

        label,
        legend {
            font-weight: 700;
        }

        input[type="submit"] {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 30px;
        }

        li {
            margin: 10px;
            font-family: sans-serif;
            font-weight: 700;
            color: #024d93;
        }


        footer {
            background: #024d93;
            margin-bottom: 0;
            height: auto;
            padding: 20px;
        }

        footer p {
            font-family: sans-serif;
            text-align: center;
            color: wheat;
        }

        footer img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            height: 200px;
        }
    </style>
</head>

<body>
   
    <div class="header">
        <img class="img" src="../../links/fsa.png">
        <h4>SRFSA</h4>

    </div>
    <hr>
    <ul>
        <li>Bienvenue sur la platforme du laboratiore SRFSA </li>
        <li>Veuilliez insérer vous données pour compléter votre inscription</li>
        <li>Insérer les informatios de votre dernière diplome</li>
        <li>Une fois votre compte crée votre prof peut vous associé à un sujet de recherche/thése ou un projet de recherche</li>
        <li>Une fois vous rempliriez les champs cliquez sur Enregistrer </li>
        <li>Vous allez redicter à la pgae de connexion</li>
        <li>Utiliser l'email et le mot de passe donner par votre adminstration pour accéder a votre espace personnel</li>
    </ul>

    <h2 style="font-size: 22px;">Formulaire d'inscription</h2>


    <?php echo form_open_multipart('insertion')?>


        <div class="form">
            <h3 id="binfop" style="font-size: 18px;margin:0px; margin-top: 10px;margin-bottom: 10px;padding: 8px;">
                Informations personnelles</h3>

            <br>
            <div id="infop">


                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Sexe</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Homme
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Femme
                                </label>
                            </div>

                        </div>
                    </div>
                </fieldset>


                <br>


                <div class="row">
                    <div class="col">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control" placeholder="-------" name="nom">
                    </div>
                    <div class="col">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control" placeholder="-----" name="prenom">
                    </div>
                </div>

                <br>


                <div class="row">
                    <div class="col">
                        <label for="tel">Tél</label>
                        <input type="tel" class="form-control" placeholder="-------" name="tel">
                    </div>
                    <div class="col">
                        <label for="date">Date de naissance</label>
                        <input type="date" class="form-control" placeholder="-------" name="date">
                    </div>
                </div>


                <br>


                <div class="row">
                    <div class="col">
                        <label for="adress">Adresse</label>
                        <input type="text" class="form-control" placeholder="-------" name="adresse">
                    </div>
                    <div class="col">
                        <label for="code postale">Code postale</label>
                        <input type="text" class="form-control" placeholder="-------" name="code postale">
                    </div>
                </div>


                <br>


                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Boursier</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Oui
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                    Non
                                </label>
                            </div>

                        </div>
                    </div>
                </fieldset>
                <br>

            </div>
            <h3 style="font-size: 18px;margin:0px; margin-top: 10px;margin-bottom: 10px;padding: 8px;">
                Parcours accadémique
            </h3>
            <p style="font-weight: 500; color: #024d93;">Insérer les informatios de votre dernière diplome</p>

            <br>


            <div class="form-group col-md-4">
                <label for="diplome">Diplome</label>
                <select id="inputState" class="form-control" name="diplome">
                    
                    <option>BAC</option>
                    <option>DUT</option>
                    <option>DEUST</option>
                    <option>DEUG</option>
                    <option>LICENCE</option>
                    <option>MASTER</option>
                    <option>DOCTORAT</option>
                </select>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label for="spesialite">Spésialité</label>
                    <input type="tel" class="form-control" placeholder="-------" name="spesialite" required>
                </div>
                <div class="col">
                    <label for="promotion">Promotion</label>
                    <select name="promotion" class="form-control">
                        <?php
                        for($i=2000;$i<=2022;$i++)
                        echo "<option>".$i."</option>"
                        ?>
                    </select>
                </div>

            </div>
            <br>

            <h3 style="font-size: 18px;margin:0px; margin-top: 10px;margin-bottom: 10px;padding: 8px;">
                Piéces jointes</h3>
            <br>
            <div class="row">
                <div class="form-group col">
                    <label for="exampleFormControlFile1">photo</label>
                    <input type="file" class="form-control-file" name="image">
                </div>
                <br> <br>
                <div class="form-group col">
                    <label for="exampleFormControlFile1">cv</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </div>

        </div>
        <hr>
        <input type="submit" class="btn btn-primary" value="Enregistrer" name="envoyer">

    </form>
    <footer>
        <p>Copyright SRFSA 2022 - Tous droits réservés</p>
        <p><b>Pour tout problème ou réclamation, veuillez nous contacter sur l'adresse mail : exemple@exemple.ac.ma</b> </p>
        <img src="links/fsa.png" alt="" srcset="">
    </footer>
    <script src="../../links/script.js"></script>
    <script src="../../links/jquery.min.js"></script>
    
</body>

</html>
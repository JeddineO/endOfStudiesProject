<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="esp/css/bootstrap.min.css">

    <title>Espace Administrateur</title>
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



        table {
            border: 1px solid red;
            width: 100%;
        }

        td {
            padding: 5px;
            font: 18px sans-serif;
            border: 1px solid darkblue;
            text-align: center;
            background: whitesmoke;

        }

        th {
            background: white;
            border: 1px solid black;
            text-align: center;
        }

        footer {
            background: #1266b4;
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
    <main>
        <h1>Espace Administrateur</h1>
        <?php echo @$error; ?>
        <a class="col-2 btn btn-primary" href="login_page"> login page</a>

        <details>
            <summary>Ajouter une equipe</summary>


            <form action="login" method="post">

                <div class="row">
                    <div class="col-6">
                        <label for="nom">Titre</label>
                        <input type="text" class="form-control" placeholder="-------" name="titre" required>
                    </div>

                    <div class="form-group col-4">
                    <label for="inputState">Chef d'equipe</label>
                    <select id="inputState" class="form-control" name="chef" required>
                        <?php
                        $membres = $this->db->query("select * from membre where position = 'prof'");
                        ?>
                        <?php foreach ($membres->result() as $membre)
                            echo
                            "
                        <option>" . $membre->nom . " " . $membre->prenom . "</option>
                        "
                        ?>
                    </select>
                </div>
                    <div class="col-10">
                        <label for="nom">description</label>
                        <textarea type="text" class="form-control" placeholder="-----" name="descr" required>
    </textarea>
                    </div>
                </div>



                
                <br>
                <div class="row">

                    <input type="submit" class="col-2 btn btn-primary" value="ajouter" name="ajouterE">

            </form>


            <div class="col-1"></div>
            </div>
            <br>

        </details>





        <details>
            <summary>Ajouter un membre</summary>


            <form action="login" method="post">

                <div class="row">
                    <div class="col">
                        <label for="nom">Email</label>
                        <input type="email" class="form-control" placeholder="-------" name="email" required>
                    </div>
                    <div class="col">
                        <label for="nom">Mot de passe</label>
                        <input type="text" class="form-control" placeholder="-----" name="password" required>
                    </div>
                </div>



                <div class="form-group col-md-4">
                    <label for="inputState">Position</label>
                    <select id="inputState" class="form-control" name="position" required>
                        <option>master</option>
                        <option>postdoc</option>
                        <option>stagiaire</option>
                        <option>doctorant</option>
                        <option>prof</option>
                    </select>
                </div>
                <br>
                <div class="row">

                    <input type="submit" class="col-2 btn btn-primary" value="ajouter" name="ajouter">

            </form>


            <div class="col-1"></div>
            </div>
            <br>

        </details>
        <form action="login" method="post">
            <details>
                <summary>Nouvelle anounce</summary>
                <div class="row">
                    <div class="col-6">
                        <label for="nom">Titre</label>
                        <input type="text" class="form-control" placeholder="-------" name="titre" required>
                    </div>
                    <div class="col-12">
                        <label for="description">Description</label>
                        <br>
                        <textarea class="form-control" cols="80%" rows="10" name="description">
            -------
            </textarea>
                    </div>
                    <input type="submit" class="col-2 btn btn-primary" value="publier" name="publier">

                </div>
            </details>
        </form>
        <details>
            <summary>Retirer un membre</summary>
            <h3>Liste des membres</h3>
            <?php
            $membres = $this->db->query("select * from membre where position != 'admin'");
            ?>
            <table>
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prénom</th>
                    <th>position</th>
                    <th>Email</th>
                    <th>Retirer</th>
                </tr>
                <?php
                foreach ($membres->result() as $membre)
                    echo
                    "
            <tr>
            <td>" . $membre->id_membre . "</td>
            <td>" . $membre->nom . "</td>
            <td>" . $membre->prenom . "</td>
            <td>" . $membre->position . "</td>
            <td>" . $membre->email . "</td>
            <td><a class='col-12 btn btn-primary' href='?id_membre=" . $membre->id_membre . "'> Supprimer</a></td>
             </tr>
            

            "
                ?>
            </table>
        </details>
    </main>
    <footer>
        <p>Copyright SRFSA 2022 - Tous droits réservés</p>
        <p><b>Pour tout problème ou réclamation, veuillez nous contacter sur l'adresse mail : exemple@exemple.ac.ma</b> </p>
        <img src="../../links/fsa.png" alt="fsa logo">
    </footer>
</body>

</html>
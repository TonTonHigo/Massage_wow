<?php
            include "modules/connexion_bdd.php";
            $insert = new ma_connexion("localhost", "massage", "root", "");

            if(isset($_POST['titre'])){

                $ins = $insert -> insert_articles($_POST['titre'], $_POST['resume'], $_POST['titre2'], $_POST['contenu'], $_POST['titre3'], $_POST['contenu2'], $_POST['photo'], $_POST['date'], $_POST['auteur']);

                header("Location: crud.php");
                exit();
            }

            ?>
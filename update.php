<?php
            include "modules/connexion_bdd.php.php";
            $update = new ma_connexion("localhost", "massage", "root", "");

            if(isset($_POST['id_articles'])){

                $up = $update -> update_articles($_POST['id_articles'],$_POST['titre'], $_POST['resume'], $_POST['titre_2 '], $_POST['contenu'], $_POST['titre_3'], $_POST['contenu_2'], $_POST['photo'], $_POST['date_post'], $_POST['auteur']);

                header("Location: interface.php");
                exit();
            }

            ?>
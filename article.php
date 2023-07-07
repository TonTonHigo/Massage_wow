<?php include "modules/connexion_bdd.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "modules/head.php"; ?>

</head>
<body>

    <?php include "modules/nav.php"; ?>

    <main>
        
    <?php
        
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $test = new ma_connexion("localhost", "massage", "root", "");
            $articles = $test -> select_where("*","articles", $id);
            foreach($articles as $show){
                echo'
                <section id="sect1">
                    <div class="section">
                        <!-- WELCOME IN BEAUTY PARADISE -->
                        <img src="https://massage-theme.richardpruzek.com/wp-content/uploads/2020/02/icon05.png" alt="" id="logo2">
                        <h1 id="titre" >' . $show['titre'] . '</h1>
                    </div>
                </section>

                <title>' . $show['titre'] . '</title>
                <!-- FLECHE BULLE -->
                <div id="divbulle">
                    <div id="bulle"><a href="#artcenter"><i class="fa-solid fa-arrow-down fa-2xl"></i></a></div>
                </div>

                <div id="artcenter">
                    <p>' . $show['contenu'] . '</p>

                    <h1>' . $show['titre'] . '</h1>
                    <p>' . $show['contenu'] . '</p>

                    <h2>' . $show['titre'] . '</h2>
                    <p>' . $show['contenu'] . '</p>
                    <img src="' . $show['photo'] . '">

                    <h3>' . $show['titre'] . '</h3>
                    <p>' . $show['contenu'] . '</p>

                    <h4>' . $show['titre'] . '</h4>
                    <p>' . $show['contenu'] . '</p>

                    <h5>' . $show['titre'] . '</h5>
                    <p>' . $show['contenu'] . '</p>

                    <small>- Auteur de l\'article: ' . $show['auteur'] . '
                    <br> ' . $show['date_post'] . '</small> 
                </div>
                ';
            }

        }


    ?>





    </main>

<?php include "modules/footer.php"; ?>  

<script src="script.js"></script>
</body>
</html>
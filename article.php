<?php include "modules/connexion_bdd.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>

    <?php include "modules/head.php"; ?>

</head>
<body>

    <?php include "modules/nav.php"; ?>

    <main>
        <?php include "modules/image_haut.php"; ?>
        <?php include "modules/bulle_arrow.php"; ?>
        
    <?php
        $test = new ma_connexion("localhost", "massage", "root", "");
        $articles = $test -> select_where("*","articles","2");
        foreach($articles as $show){
            echo'
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
            </div>
            ';
        }
    ?>





    </main>

<?php include "modules/footer.php"; ?>  

<script src="script.js"></script>
</body>
</html>
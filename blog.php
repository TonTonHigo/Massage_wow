<?php include "modules/connexion_bdd.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <?php include "modules/head.php"; ?>

</head>
<body>

    <?php include "modules/nav.php"; ?>

    <main>
        <?php include "modules/image_haut.php"; ?>
        <?php include "modules/bulle_arrow.php"; ?>
     
    <div id="blog_tease">
    <?php
        $test = new ma_connexion("localhost", "massage", "root", "");
        $articles = $test -> select("*","articles");
        foreach($articles as $cartes){
            echo '
            
                <div class="cartes">
                    <img class="carteimg" src="' . $cartes['photo'] . '" alt="">
                    <h2><a href="">' . $cartes['titre'] . '</a></h2>
                    <p>by <a href="" class="richard">' . $cartes['auteur'] .'</a></p>
                    <button>read more</button>
                </div>
            ';
    }
    ?>
    </div>





    </main>

<?php include "modules/footer.php"; ?>  

<script src="script.js"></script>
</body>
</html>
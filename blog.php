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

    <section id="sect1">
                <div class="section">
                    <!-- WELCOME IN BEAUTY PARADISE -->
                    <img src="https://massage-theme.richardpruzek.com/wp-content/uploads/2020/02/icon05.png" alt="" id="logo2">
                    <h1 id="titre" >Blog</h1>
                </div>
            </section>

            <title> Blog </title>
            <!-- FLECHE BULLE -->
            <div id="divbulle">
                <div id="bulle"><a href="#blog_tease"><i class="fa-solid fa-arrow-down fa-2xl"></i></a></div>
            </div>
            
    <div id="blog_tease">

    <?php
    $test = new ma_connexion("localhost", "massage", "root", "");
    $articles = $test->select("*", "articles");
    
    foreach ($articles as $cartes) {
        echo '
            <div class="cartes">
                <form action="article.php" method="POST">
                    <input type="hidden" name="id" value="' . $cartes['id_articles'] . '"> 
                    <img class="carteimg" src="' . $cartes['photo'] . '" alt="">
                    <h2><a href="">' . $cartes['titre'] . '</a></h2>
                    <p>by <a href="" class="richard">' . $cartes['auteur'] .'</a></p>
                    <button type="submit">read more</button>
                </form>
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
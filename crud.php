<?php include "modules/connexion_bdd.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'articles</title>

    <?php include "modules/head.php"; ?>

</head>
<body>

    <?php include "modules/nav.php"; ?>

    <main>
        <?php include "modules/image_haut.php"; ?>
        <?php include "modules/bulle_arrow.php"; ?>


     <div id="boxcrud">        
        <form method="POST" class="formcrud" action="insert.php">

            <h1>INSERER UN ARTICLE</h1>
            <label for="titre">Titre</label>
            <input name="titre" type="text">

            <label for="resume">Résumé</label>
            <input name="resume" type="text">

            <label for="titre2">Titre 2</label>
            <input name="titre2" type="text">

            <label for="contenu">Contenu</label>
            <input name="contenu" type="text">

            <label for="titre3">Titre 3</label>
            <input name="titre3" type="text">

            <label for="contenu2">Contenu 2</label>
            <input name="contenu2" type="text">

            <label for="photo">Photo</label>
            <input name="photo" type="text">

            <label for="date">Date</label>
            <input name="date" type="date">

            <label for="auteur">Auteur</label>
            <input name="auteur" type="text">

            <button type="submit">INSERER</button>
        </form>
        
        <form method="POST" class="formcrud" action="update.php">

            <h1>UPDATE UN ARTICLE</h1>

            <label for="id_articles">ID</label>
            <input name="id_articles" type="number">

            <label for="titre">Titre</label>
            <input name="titre" type="text">

            <label for="resume">Résumé</label>
            <input name="resume" type="text">

            <label for="titre2">Titre 2</label>
            <input name="titre2" type="text">

            <label for="contenu">Contenu</label>
            <input name="contenu" type="text">

            <label for="titre3">Titre 3</label>
            <input name="titre3" type="text">

            <label for="contenu2">Contenu 2</label>
            <input name="contenu2" type="text">

            <label for="photo">Photo</label>
            <input name="photo" type="text">

            <label for="date">Date</label>
            <input name="date" type="date">

            <label for="auteur">Auteur</label>
            <input name="auteur" type="text">

            <button type="submit">UPDATE</button>

        </form>

        <form method="POST" class="formcrud" action="delete.php">

            <h1>DELETE UN ARTICLE</h1>

            <label for="id_articles">ID</label>
            <input name="id_articles" type="number">

            <button type="submit">DELETE</button>
        </form>

     </div>





    </main>

<?php include "modules/footer.php"; ?>  

<script src="script.js"></script>
</body>
</html>
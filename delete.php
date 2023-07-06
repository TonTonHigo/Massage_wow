<?php
    include "modules/connexion_bdd.php";
    $delete = new ma_connexion("localhost", "massage", "root", "");
    if(isset($_POST['id_article'])){
        
        $del = $delete -> delete_articles($_POST['id_article']);
    header("Location: crud.php");
    exit();
    }
    
?>
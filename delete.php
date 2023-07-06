<?php
    include "modules/connexion_bdd.php";
    $delete = new ma_connexion("localhost", "massage", "root", "");
    if(isset($_POST['id_articles'])){
        
        $del = $delete -> delete_articles($_POST['id_articles']);
    header("Location: crud.php");
    exit();
    }
    
?>
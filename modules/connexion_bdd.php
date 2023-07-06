<?php


class ma_connexion{

    private $host;
    private $nom_bd;
    private $user;
    private $password;
    private $connexionPDO;

    public function __construct($host, $nom_bd, $user, $password)
    {
        $this -> host = $host;
        $this -> nom_bd = $nom_bd;
        $this -> user = $user;
        $this -> password = $password;

        try {

            $dsn = "mysql:host=" . $this-> host . "; dbname=" . $this-> nom_bd . "; charset:=utf8mb4_0900_ai_ci";
            $this-> connexionPDO = new PDO($dsn, $this-> user, $this-> password);
            $this-> connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo "<style> body{background-color: lightcyan; color: darkbrown;} </style>";
            // echo "connexion réussi" . "<br>" ."↜(╰ •ω•)╯!" . "<br>";

        } catch (PDOException $e) {

            echo "connexion pas marché!" . "<br>" ."(╥╯⌒╰╥๑)" . "<br>";
            echo "<style> body{background-color: #FB4640; color: white;} </style>";
            echo "Erreur : " . $e->getMessage();

        }
    }

    // SECLECTION
    public function select( $colonne, $table){
        try {

            $select = "SELECT $colonne FROM $table";

            $requete = $this -> connexionPDO -> prepare($select);
            $requete -> execute();
            $afficher = $requete -> fetchAll(PDO::FETCH_ASSOC);

            return $afficher;
            echo "Voici les résultat pour la sélection de $colonne dans $table <br>";

        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }
    // SECLECTION WHERE
    public function select_where( $colonne, $table, $id){
        try {

            $requete = "SELECT " . $colonne . " FROM " . $table . " WHERE id_articles = " . $id;

            $requete = $this -> connexionPDO -> prepare($requete);
            $requete -> execute();
            $afficher = $requete -> fetchAll(PDO::FETCH_ASSOC);

            return $afficher;


        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }



    // INSERTION articles
    public function insert_articles($titre, $resume, $titre_2 , $contenu, $titre_3, $contenu_2, $photo, $date_post, $auteur){
        try {

            $insertion = "INSERT INTO  `articles`(titre, resume, titre_2 , contenu, titre_3, contenu_2, photo, date_post, auteur) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $requete = $this -> connexionPDO -> prepare($insertion);
            $requete->bindValue(1, $titre);
            $requete->bindValue(2, $resume);
            $requete->bindValue(3, $titre_2);
            $requete->bindValue(4, $contenu);
            $requete->bindValue(5, $titre_3);
            $requete->bindValue(6, $contenu_2);
            $requete->bindValue(7, $photo);
            $requete->bindValue(8, $date_post);
            $requete->bindValue(9, $auteur);

        
            $requete->execute();

        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }



    //  MISE A JOUR CLIENT
    public function update_articles( $id, $titre, $resume, $titre_2 , $contenu, $titre_3, $contenu_2, $photo, $date_post, $auteur){
        try {

            $update = "UPDATE `articles` SET titre = ?, resume = ?, titre_2  = ?, contenu = ?, titre_3 = ?, contenu_2 = ?, photo = ?, date_post = ?, auteur = ? WHERE id_articles = ?";

            $requete = $this -> connexionPDO -> prepare($update);
            $requete->bindValue(1, $titre);
            $requete->bindValue(2, $resume);
            $requete->bindValue(3, $titre_2);
            $requete->bindValue(4, $contenu);
            $requete->bindValue(5, $titre_3);
            $requete->bindValue(6, $contenu_2);
            $requete->bindValue(7, $photo);
            $requete->bindValue(8, $date_post);
            $requete->bindValue(9, $auteur);
            $requete->bindValue(10, $id);
        
            $requete->execute();


        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }


    //  SUPPRESSION CLIENT
    public function delete_articles( $id){
        try {

            $supprime = "DELETE FROM `articles` WHERE `id_articles` = ?";

            $requete = $this -> connexionPDO -> prepare($supprime);
            $requete->bindValue(1, $id);
            
            $requete->execute();


        } catch (PDOException $e) {

            echo "Erreur : " . $e->getMessage();

        }
    }

}

// $test = new ma_connexion("localhost", "massage", "root", "");
// $users = $test -> select("*","users");

// var_dump($articles = $test -> select("*","articles"));
// $test -> insert_client("bob","maurice","mauricien@gmail.com");
// $test -> update_client("2","hampter","antartique","hampter@gmail.com");
// $test -> delete_client("5");

?>





<?php

    include("common/header.php");
    include("common/menu.php");
?>

<?php 

    const HOST_NAME = "localhost";
    const DB_NAME = "roomsinfo";
    const USER_NAME = "root";
    const PWD = "";

    try {
        $connexion = 'mysql:host='.HOST_NAME.';dbname='.DB_NAME;
        $myPDO = new PDO($connexion, USER_NAME, PWD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(PDOException $e) {
        $message = "erreur de connexion à la DB - ". $e->getMessage();
        die($message);
    }

    if($myPDO) {
        $monthNumber = 2;
        $req = "SELECT * FROM bdd_pi_modifieddates WHERE MONTH(stay_date) = :monthNumber AND DAY(stay_date) = 1";
        $stmt = $myPDO->prepare($req); //Préparation de la requête
        $stmt->bindValue(':monthNumber', $monthNumber, PDO::PARAM_INT);
        $stmt->execute(); //Execution de la requête
        $res1 = $stmt->fetchAll();
        echo "<pre>";
        print_r($res1);
    }
    


?>

<?php   
    include("common/footer.php");
?>
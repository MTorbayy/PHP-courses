<?php

    include("common/header.php");
    include("common/menu.php");
?>

<?php

test();

$nomJoueur1 = "Marie"; //Création d'une variable

$ageJoueur1 = 30;

$estUnHommeJoueur1 = false;

//Types des variables simples : string, number, boolean

?>

Nom du Joueur 1 : <?php echo $nomJoueur1;  // instruction d'affichage ?>
<br />


Age du joueur 1 : <?php echo $ageJoueur1; ?>
<br />

<?php $ageJoueur1 = $ageJoueur1 + 1; ?>

Age du joueur 1 :<?php echo $ageJoueur1; ?>
<br />

<?php
if($estUnHommeJoueur1 === true) {
    echo "C'est un homme";
} else {
    echo "C'est une femme";
}

//Methode 1 de récupération des variables dans une fonction :
function test () {
    global $nomJoueur1, $ageJoueur1, $estUnHommeJoueur1; //met le scope des variables en global
    echo "<br />";
    echo "coucou " . $nomJoueur1;
    echo "<br />";
}

test();


//Methode 2 de récupération des variables dans une fonction :
function test2 ($nom) {
    echo "<br />";
    echo "Hello " . $nom;
    echo "<br />";
}

test2($nomJoueur1);

function test3 () {
    $a = 5;
    $b = 10;
    return "test return " . $a + $b;
}

echo "<br />" . test3();

$text = test3();

echo "<br />" . $text;


?>


<?php   
    include("common/footer.php")
?>




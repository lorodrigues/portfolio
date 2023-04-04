<?php
include("FonctionsPerso.php");

if(isset($_GET['secu']) & !empty($_GET['secu'])){
    $numero = $_GET['secu'];

    if(isNumSecuOk($numero)== true){
        echo "Votre numéro de sécu est valide <br>";
        echo "Votre numéro de sécu est $numero <br>";
    }
    else{
        echo "données invalides";
    }
}
if(isset($_GET['portable']) & !empty($_GET['portable'])){
        $portable = $_GET['portable'];
    
        if(isPortOk($portable) == true){
            echo "Votre numéro de sécu est valide <br>";
            echo "Votre numéro de sécu est $portable <br>";
        }
        else{
            echo "données invalides";
        }

}
?>
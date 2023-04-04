<?php
function isNumSecuOk ($numero){
    if ( strlen($numero)==13 & ($numero[0]==1 || $numero[0]==2)){
        return "Le numéro ci-dessus est bon";
    }
    else{
        return "Le numéro ci-dessus est mauvais";
    }
}
$numero = $_GET['secu'];
$num = $_GET['num'];
pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
pattern="['06'-'07']."
<?php
function isNumSecuOk ($numero){
    if (strlen($numero)==13 & ($numero[0]==1 || $numero[0]==2)) {
        return true;
    }
    else{
        return false;
    }
}
function isPortOk ($portable){
    if (strlen($portable) == 10 && ($portable[0] == 0 && $portable[1] == 6 || $portable[1] == 7)) {
        return true;
    }
    else{
        return false;
    }
}
?>
<?php

include_once '../Classes/Inscription.php';
function dataOfcardsDash(){
    $data = Inscription::getlist();
    
}

if(function_exists($_GET['f'])) {
    dataOfcardsDash();
}

?>
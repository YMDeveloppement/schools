<?php

include_once '../Classes/Promotion.php';
function give_promotion(){
    $data = Promotion::getPromotion();

    echo "<pre>";
    print_r($data["ID"]);
    echo "</pre>";
}

if(function_exists($_GET['f'])) {
    give_promotion();
}

?>
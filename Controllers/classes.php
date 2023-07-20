<?php

include_once "Classes/classe.php";
    function getClasseByniveau(){

        $obj = new Classe();
        // echo "yassine";
        // $data=$obj->getByniveau();
        $cl = $obj->getByniveau();
        return $cl;
        
    }
    
    // getClasseByniveau();
?>


<?php
    include_once "Classes/niveau.php";
    // include_once("../Classes/niveau.php");
    function writeJson(){
        $v = new Niveau();
        $data  = $v->getByniveau();
        $json =  json_encode($data);
        
        // print_r($json);
        file_put_contents("pages/js/data.json", $json);
    }   
    // writeJson();

?>
    
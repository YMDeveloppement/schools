<?php

    include_once '../Classes/evaluation.php';
    function getMtrByDate() {
        
        $result = Evaluation::getDateBymatiere();
        print_r(json_encode($result));

    }
    
    // getMtrByDate();

    // print_r(['yassine','hamza']);
    
    if(isset($_GET['func'])){
        if($_GET['func'] == "apiDateByMatiere")
        {
            getMtrByDate();
        }
        
    }
    else{

        echo  "<script>console.log('aaaaaaaaa')</script>";
    }
?>
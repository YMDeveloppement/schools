<?php

    include_once '../Classes/evaluation.php';
    function getMtrByDate() {
        
        $result = Evaluation::getDateBymatiere();
        print_r(json_encode($result));
        echo "<script>console.log(".$result[0][0].")</script>";

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
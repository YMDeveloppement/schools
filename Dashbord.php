<?php
include "layouts/headerFile.php";
include "Controllers/classes.php";

// session_start();    

// <div class="progress">
//                     <div class="progress-bar bg-primary" role="progressbar" style="width: 50%!important" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
//                 </div>

// #########################################################################
echo <<<"body_of_content"
<div class="container container_carts">
    <div class="row">
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total of Inscription</h6>
                    <h2 class="text-right"><i class="fa-solid fa-graduation-cap"></i> <span>486</span></h2>
                    <p class="m-b-0">Total of new inscription<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total of Absences to Check</h6>
                    <h2 class="text-right"><i class="fa-solid fa-clock"></i> <span>486</span></h2>
                    <p class="m-b-0">total of checked <span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Evaluations planned</h6>
                    <h2 class="text-right"><i class="fa-solid fa-file-lines"></i> <span>486</span></h2>
                    <p class="m-b-0">Evaluations Do It<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Total Teacher Received</h6>
                    <h2 class="text-right"><i class="fa-solid fa-person-chalkboard"></i> <span>486</span></h2>
                    <p class="m-b-0">Total assistant teachers<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="cards_dash"
    
</div>
body_of_content;
$cycle=[1 => 'Préscolaire',2 => "Primaire",3 => "Collège",4 => "Lycée"];
// #########################################################################
for($i =1  ; $i <= 4 ;$i++){

    echo <<<"startcard"
            <div class='card_niveau'>
            <div class='title_card'>Total class in $cycle[$i]</div>
        startcard;
    $rslt = getClasseByniveau() ;
    // #######################################
    // #######################################
    foreach($rslt as $item){
        if($item["Cycle"] == $i){
            
            $label=$item['label'];
            $count=$item['total'];
            echo <<<"niveau"
                <div class="line_grid">
                <div class="niveau">$label</div>
                <div class="count">$count</div>
                </div>
            niveau;
    
        }
    }
        
    echo <<<"endcard"
            </div>  
        endcard;
        
}

echo <<<"enddash"
    </div>
enddash;
// echo "<pre>";
// print_r($item["label"]); 
// echo "</pre>";
// $_SESSION["user"]='yassine';
// print_r($_SESSION["user"]);


echo <<<"chart"
<div class="chartBlock">
    <canvas id="myChartPile"></canvas>
</div> 
chart;

include "layouts/footerFile.php";
?>

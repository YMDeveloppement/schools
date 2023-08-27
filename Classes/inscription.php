<!-- <?php if (empty(session_id())) {
    session_start();
} ?> -->

<?php

include_once '../config/Connect.php';
include_once '../Classes/promotion.php';


class Inscription
{
    public $fields = array(
        "id" => "",
        "Niveau" => "",
        "label" => "",
        "responsible" => "",
        "promotion" => "",
        "nbr_max" => ""
    );
    public static $table ="inscriptions";

    public static function getlist($where = array()){
        global $data;
        $data=[];
        $addWhere =[];
        $Newhere ="";
        if($where){
            foreach($where as $item=>$value){
                $addWhere=[$item . " in (" .$value .") "];
            }
            $Newhere="where ". implode(" and ",$addWhere);
        }
        $query = "select * from inscriptions ".$Newhere;
        if(Connect::$conn){
            if($Newhere){
                
                $query = $query . " and promotion" . Promotion::getPromotion()["ID"];
                $result = mysqli_query(Connect::$conn,$query);
                $data = $result;
            }
            else{
                $query = $query . " where promotion = " . Promotion::getPromotion()["ID"];
                $result = mysqli_query(Connect::$conn,$query);

                foreach ($result as $r) {
                    $data[] = $r;
                }
                
            }
            // echo "<pre>";
            //     print_r(count($data));
            // echo "<pre>";
            # code...
        }
        else{
            Connect::get_connection();
            self::getlist();
        }


        return $data;
    }


}

?>
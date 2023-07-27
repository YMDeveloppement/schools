<?php

include_once '../config/Connect.php';

class Promotion
{
    public $fields = array(
        "id" => "",
        "Niveau" => "",
        "label" => "",
        "responsible" => "",
        "promotion" => "",
        "nbr_max" => ""
    );
    
    public static function getPromotion(){
        global $dataProm;
        if (Connect::$conn) {
            $sql= "select * from promotion where  Actuelle = 1";
            $result = mysqli_query(Connect::$conn, $sql);
            foreach($result as $r){
                $dataProm = $r;
            }
            
        } else {
            Connect::get_connection();
            self::getPromotion();
        }
        return $dataProm;
    }
}

?>
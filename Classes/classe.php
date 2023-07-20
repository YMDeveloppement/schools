<!-- <?php if (empty(session_id())) {
    session_start();
} ?> -->

<?php

include_once 'config/Connect.php';

class Classe
{
    public $fields = array(
        "id" => "",
        "Niveau" => "",
        "label" => "",
        "responsible" => "",
        "promotion" => "",
        "nbr_max" => ""
    );


    public function getByniveau()
    {
        global $arr;
        $arr = [];
        if (Connect::$conn) {
            // try {
            //     $sql = 'SELECT * FROM niveau ORDER BY id DESC LIMIT 10';

            //     $stmt = mysqli_prepare($GLOBALS['db'],$sql);
            // }catch(Exception $e){

            //     echo '<script>alert("Erreur de connexion à la base de données");</script>';
            // }

            $sql = 'select Cycle, `label` ,`total` from (SELECT nv.`ID`,count(*) as `total` FROM niveaux as nv inner join `classes` as cl  on cl.Niveau = nv.ID group by nv.`ID`) as s1 inner join niveaux nv on nv.`ID` = s1.ID ';
            $result = mysqli_query(Connect::$conn, $sql);
            // $x = mysqli_fetch_array($result);
            
            // return $result;
            foreach ($result as $item) {
                $arr[]=$item;

                // echo "<pre>";
                // print_r($arr); 
                // echo "</pre>";
            }
            // echo "<pre>";
            // print_r($arr); 
            // echo "</pre>";
            // return $arr;
        } else {
            Connect::get_connection();
            $this->getByniveau();
        }
        // echo "<pre>";
        // $arr=['yassine','hamza'];
        return $arr;    
    }

    

}
?>
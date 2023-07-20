<!-- <?php if (empty(session_id())) {
    session_start();
} ?> -->

<?php

include_once 'config/Connect.php';

class Classe
{
    public $fields = array(
        "id" => "",
        "label" => ""
    );  


    public function getByCycle()
    {
        global $arr;
        $arr = [];
        if (Connect::$conn) {
            $sql = "select ID, label , count(*)  from cycles cls inner join niveaux nv on nv.Cycle = cls.ID inner join classes cl on cl.Niveau = nv.ID inner join inscriptions ins on ins.classe = cl.ID group by ID, label ";
        }
        else{
            Connect::get_connection();
            $this->getByCycle();
        }
    }

    

}
?>
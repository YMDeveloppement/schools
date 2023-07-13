<?php
include '../config/Connect.php';
session_start();
class Niveau
{
    public $fields = array(
        "id" => "",
        "cycle" => "",
        "label" => ""
    );
    // public $id;
    // public $name;
    // public $surname;
    // public $mail;
    // public $password;
    // public $role;
    // public $status;
    // public $created_at;
    // public $updated_at;

    public function getByniveau(){
        if(Connect::$conn){
            
            $sql = 'select nv.label , count(*) from niveaux nv inner join classes cl on cl.Niveau = nv.ID inner join inscriptions ins on cl.ID = ins.classe where ins.promotion = (select ID from promotion where Actuelle = 1) GROUP BY nv.label' ;
            $result = mysqli_query(Connect::$conn, $sql);
            echo "<pre>";
                print_r($result);
            echo "</pre>";
            return $result;

        }
        else {
            Connect::get_connection();
            $this->getByniveau();
        }
    } 

}
?>
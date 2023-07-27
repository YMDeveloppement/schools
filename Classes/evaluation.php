<?php

include_once '../config/Connect.php';

class Evaluation
{
    public $fields = array(
        'ID',
        'date_evaluations',
        'matiere',
        'classe',
        'date_insert',
        'typeExam',
        'fait',
        'notevalidation',
        'semestre',
        'enseignant',
        'planifier_le',
        'valide_le',
        'valide',
        'valideBy'
    );


    public function getEvaluationsPlanifier()
    {
        global $data;
        if (Connect::$conn) {

        }
    }

    public static function getDateBymatiere()
    {
        global $data;
        $data =[];
        if (Connect::$conn) {
            $sql = 'select date_evaluations,mtr.label as matiere from evaluations evl inner join matieres mtr on mtr.ID = evl.matiere ';
            $result = mysqli_query(Connect::$conn, $sql);
            foreach ($result as $item) {
                $data["date"][] = $item['date_evaluations'];
                $data["matiere"][] = $item['matiere'];

            }
        }
        else{
            Connect::get_connection();
            self::getDateBymatiere();
        }

        return $data;
    }



}
?>
<?php

include_once 'config/Connect.php';

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


    public function getEvaluationsPlanifier(){
        global $data;
        if (Connect::$conn) {
            
        }
    }



}
?>
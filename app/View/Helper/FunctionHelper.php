<?php
App::uses('AppHelper','View/Helper');
class FunctionHelper extends AppHelper{

    public function getGender($val){
        $gender = array('Female','Male');
        return $gender[$val];
    }
}
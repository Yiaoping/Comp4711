<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student. This class contains functions to construct a student.
 *
 * @author Yiaoping
 */
class Student {
    
    /*
     * This function is used to construct the student indicating their first and
     * last name, their email, and their grades.
     */
    function _construct(){
        $this->surname =  '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     * This function is used to add an email for the student.
     */
    function add_email($which, $address){
        $this->emails[$which]=$address;
    }
    
    /*
     * This function is used to add a grade to the student.
     */
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    /*
     * This function is used to find the average score of the student's marks.
     */
    function average(){
        $total = 0;
        foreach ($this->grades as $value){
            $total += $value;
        }
        return $total/ count($this->grades);
    }
    
    /*
     * This function is used to format and output the information of a student
     * nicely.
     */
    function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach($this->emails as $which=>$what){
        $result .= $which . ': '. $what. "\n";
    }
    $result .= "\n";
    return '<pre>'.$result.'</pre>';
    }

}

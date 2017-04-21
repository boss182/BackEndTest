<?php

/**
 * ChangeString.php
 *
 * BackEndTest
 *
 * @author     Gianfranco Oliva
 * @version    V.1.0 19/04/2017
 */

class CompleteRange{

    public function build($input){
    	$output = array();
    	if(is_array($input)){
    		sort($input);
			$first = $input[0];
			$last = $input[(count($input)-1)];
			for($i=$first; $i<=$last;$i++){
			    $output[] = $i;
			}
    	}
    	return $output;
    }
}

//$obj = new CompleteRange();
//var_dump($obj->build(array(8,10,15)));
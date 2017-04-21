<?php

/**
 * ChangeString.php
 *
 * BackEndTest
 *
 * @author     Gianfranco Oliva
 * @version    V.1.0 19/04/2017
 */

 class ClearPar{

    public function build($input){

    	$inputArray = str_split($input);
		$two = '()';
		$output = '';

		for($i=0; $i<count($inputArray)-1; $i++ ){
		    $pair = $inputArray[$i].$inputArray[$i+1];
		    if($pair==$two){
		        $output .= $two;         
		        $i++;
		    }
		}
		echo $output;
    }
}

//$obj = new ClearPar();
//$obj->build('((()()()())))()(((())');

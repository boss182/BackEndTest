<?php
 
/**
 * ChangeString.php
 *
 * BackEndTest
 *
 * @author     Gianfranco Oliva
 * @version    V.1.0 19/04/2017
 */

class ChangeString{

	private $abc = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z');

    public function build($input){
        $output = '';
        for($i=0;$i<mb_strlen($input,'UTF-8');$i++){
            $value = mb_substr($input,$i,1,'UTF-8');
        	$output .=  $this->nextValue($value);
        }
        return $output;
    }

    private function nextValue($value){
        
        $position = array_search(strtolower($value), $this->abc);
		$next = $position;
		if(is_int($position)){
		    if($position == (count($this->abc)-1)){
		        $next = 0;
		    }else{
		        $next++;
		    }
		    return (ctype_upper($value))? strtoupper($this->abc[$next]) : $this->abc[$next];
		}else{
			return $value;
		}
    }
    
}

//$obj = new ChangeString();
//echo $obj->build('a');
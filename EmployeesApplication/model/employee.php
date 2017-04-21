<?php 
date_default_timezone_set('America/Lima');

class Employee
{
	
	private $jsonContent;
	
	public $dataEmployees;

	function __construct(){

		$this->jsonContent = file_get_contents( __DIR__ . '/data/employees.json');

		$this->dataEmployees = json_decode($this->jsonContent, true);

	}

	public function getAll(){

		return $this->dataEmployees;
	}

	public function getById($id)
	{
		$position = array_search($id, array_column($this->dataEmployees, 'id'));

	    if (is_numeric($position)) {

    		return $this->dataEmployees[$position];

    	} else {

    		return null;
    	}
	}

	public function getByEmail($email){

		$position = array_search($email, array_column($this->dataEmployees, 'email'));
		
		$result = array();

	    if (is_numeric($position)) {

    		array_push($result, $this->dataEmployees[$position]);
    	}

    	return $result;
	}

	public function filterBySalary($min, $max){
		
		$employees = Array();

		for ($i=0; $i < count($this->dataEmployees); $i++) {

			$employee = $this->dataEmployees[$i];
			
			$salary = substr($employee['salary'], 1);
			
			$salary = str_replace(',', '', $salary);

			if (($salary >= $min) && ($salary <= $max)) {

				array_push($employees, array( 'employee' => $employee));
			}
		}

	    return $employees;
	}
}
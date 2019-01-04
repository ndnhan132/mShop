<?php
class Person{
	public $name;
	protected $gender;
	protected $age;

	public function __construct($_name = "Underfined", $_gender= "Underfined", $_age = 0){
		echo "<h4 style='color:red'>begin of class </h4><hr>";
		$this->name   = $_name;
		$this->gender = $_gender;
		$this->age    = $_age;
	}
	public function getName(){
		return $this->name;
	}
	public function setName($value){
		$this->name = $value;
	}
	public function getGender(){
		return $this->gender;
	}
	public function setGender($value){
		$this->gender = $value;
	}
	public function getAge(){
		return $this->age;
	}
	public function setAge($value){
		$this->age = $value;
	}

	private function showAll(){
		echo $this->name . "" . $this->gender . "" . $this->age;
	}
	protected function show(){
		echo $this->name . " + " . $this->gender . " + " . $this->age;
	}

	public function setData($_name, $_gender, $_age){
		$this->name   = $_name;
		$this->gender = $_gender;
		$this->age    = $_age;
	}

	public function displayData(){
		echo "<hr> name: ". $this->name ;
		echo "<br> Gender: " . $this->gender; 
		echo "<br> Age: " .$this->age; 
	}
	// public function __destruct(){
	// 	echo '<hr> end of class<hr>';
	// }

}


<?php
class Person{
	public $name;
	protected $gender;
	private $age;



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
	protected function getGender(){
		return $this->gender;
	}
	protected function setGender($value){
		$this->gender = $value;
	}
	private function getAge(){
		return $this->age;
	}
	private function setAge($value){
		$this->age = $value;
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




echo 'create $sam object of class Person';
$sam = new Person('sam', 'male', 19);
// $sam = new Person();
// $sam->setData('sam', 'male', 19);

$sam->name = 'nhan';
$sam->setName('set');
echo $sam->getName();

// $sam->gender = 'nhan';		//"Cannot access protected property Person::$gender"
// $sam->setGender('setgender');	//"Call to protected method Person::setGender()
// echo $sam->getGender();	//Call to protected method Person::getGender()

// $sam->age = 'nhan';	//"Cannot access private property Person::$age"
// $sam->setAge('11111'); //"Call to private method Person::setAge()
// echo $sam->getAge(); //Call to private method Person::getAge() 

$sam->displayData();

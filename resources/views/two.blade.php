<?php
include('/var/www/html/MobileShop/resources/views/three.blade.php');

/**
 * 
 */
class Student extends Person
{	
	//private $name;	//Access level to Student::$name must be public (as in class Person)
	//private $gender;	//"Access level to Student::$gender must be protected (as in class Person) or weaker"
	// public $age; //OK

	private $class= '';
	private $school = '';
	
	function __construct()
	{
		# code...
		parent::__construct();
	}
	public function getClass(){
		return $this->class;
	}
	public function setClass($value){
		$this->class = $value;
	}
	public function getSchool(){
		return $this->school;
	}
	public function setSchool($value){
		$this->school = $value;
	}

	//override
	public function getStudentAge(){
		return $this->show();
	}
	//overload
	public function sum(){
		$sum = 0;
		foreach (func_get_args() as $value) {
			# code...
			$sum += $value;
		}
		return $sum;
	}

}

// $nhan = new Student('nhan', 'male', 22); //ko dc
// $nhan = new Student;
// $nhan->setGender('male');
// $nhan->setAge('32');
// $nhan->setName('nhan');
// echo $nhan->name;
// echo $nhan->gender;
// echo $nhan->age;
// echo $nhan->getName();
// echo $nhan->getGender();
// echo $nhan->getAge();

// $nhan->showAll();	//"Call to private method Person::showAll()
// $nhan->show();	//Call to protected method Person::show()
// $nhan->displayData();

// $nhan->setClass('14');
// $nhan->setSchool('DU');
// echo $nhan->getName();
// echo "<br>";
// echo $nhan->getGender();
// echo "<br>";
// echo $nhan->getAge();
// echo "<br>";
// echo $nhan->getClass();
// echo "<br>";
// echo $nhan->getSchool();
// echo "<br>";
// echo $nhan->sum();
// echo "<br>";
// echo $nhan->sum(0 , 1 , 2);
// echo "<br>";
// echo $nhan->sum(5 , 1);
// echo "<br>";
// // echo $nhan->sum(a , b ,c);
// echo "<br>";
// echo $nhan->sum(0 , 1 , 2 , 3, 4 ,5);
// echo "<br>";
// echo $nhan->getStudentAge();


/*
interface Move
{
	const SPEED = 300;
	const STOP = 0;
	public function run();
	public function stop();
}
interface Hit
{
	const BASE_DAMAGE = 55;
	public function hit();
}

class Hero implements Move, Hit
{
	private $speed;
	private $heroName;
	private $dam;

	public function run(){
		$this->speed = Move::SPEED;
		echo "$this->name dang chay speed = $this->speed  <br>";
		return $this;
	}
	public function stop(){
		$this->speed = Move::STOP;
		echo "dung lai speed =  $this->speed <br>";
		return $this;
	}
	public function hit(){
		$this->dam = Hit::BASE_DAMAGE; 
		echo "tan cong gay $this->dam sat thuong len creep <br>";
		return $this;
	}
	public function setName($value){
		$this->name = $value;
	}
	public function getName()
	{
		return $this->name;
	}
}


$mal = new Hero;
$mal->setName('Mal');
$mal->run()->stop()->hit();


class Boss implements Move, Hit
{
	public function run(){

	}
	public function stop(){

	}
	public function hit(){

	} 
}

abstract class Devil
{
	protected $name;
	public function __construct($name = "Underfined")
	{
		$this->name = $name;
	}
	abstract public function getName();
	abstract public function setName($name);
	public function display()
	{
		echo "Name of Devil is $this->name";
	}
}
class Monster extends Devil
{
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}

}
$mon = new Monster;
echo $mon->getName();
$name = $mon->setName('SAM')->getName();
echo $name;
$mon->display();
class Terror extends Devil
{
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getName()
	{
		return $this->name;
	}

}


session_start();
$_SESSION["color"] = "red";
print_r($_SESSION["color"]);
// session_unset();
session_destroy();
print_r($_SESSION["color"]);



$c_name = "user";
$c_value = "Value";

setcookie($c_name, $c_value, time() + 10 , "/");

echo $_COOKIE['user'];

*/

// public function Fi($val)
// {
// 	if($val === 1 && $val === 2) echo 1;
// 	if($val >= 3)
// 	{

// 	}
// }

?>
<?php

// $s1 = 1;
// $s2 = 1;
// while(true)
// {
// 	// global $s1, $s2;
// 	$s = $s1+ $s2;
// 	$s1 = $s2;
// 	$s2 = $s;
// 	echo $s2 . "<br>";
// }

function Fi($v)
{
	if($v === 1 || $v === 2) 
	{
		return 1;
	}
	if($v >= 3)
	{
		return (Fi($v - 1) + Fi($v - 2));
	}
}

// for($i = 1 ; $i < 15; $i++)
// {
// 	echo Fi($i) . "<br>";
// }


function GT($n)
{
	if($n === 0)
	{
		return 0;
	}
	if($n === 1)
	{
		return 1;
	}
	if($n >= 2)
	{
		return ($n * GT($n - 1));
	}
}
echo GT(5);






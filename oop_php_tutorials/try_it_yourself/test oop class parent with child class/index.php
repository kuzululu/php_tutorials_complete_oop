<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// using parent class with child class

// parent class
	class Info{
		private $name;
		private $last;
		private $age;

		public function setModel($name){
			$this->name = $name;
		}

		public function getModel(){
			return $this->name;
		}

		public function setLast($last){
			$this->last = $last;
		}

		public function getLast(){
			return $this->last;
		}
		
		public function setAge($age){
			$this->age = $age;
		}

		public function getAge(){
			return $this->age;
		}
	}

	// child class
	class ChildInfo extends Info{
		private $infor = "your name is ";
		private $age_info = " and your age is ";
		public function information(){
			return $this->infor.$this->getModel()." ".$this->getLast().$this->age_info.$this->getAge() . "<br>";
		}
	}

$f_name = new ChildInfo();
$f_name->setModel("Jeff Ronald");
$f_name->setLast("Gamasan");
$f_name->setAge(29);

$m_name = new ChildInfo();
$m_name->setModel("Ma. Isabel");
$m_name->setLast("Gamasan");
$m_name->setAge(25);

$c_name = new ChildInfo();
$c_name->setModel("Jameia Fei");
$c_name->setLast("Gamasan");
$c_name->setAge(4);

echo $f_name->information();
echo $m_name->information();
echo $c_name->information();

?>

</body>
</html>
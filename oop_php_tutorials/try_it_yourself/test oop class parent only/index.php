<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php

// using parent class only
	class Info{
		private $name;
		private $last;
		private $age;

		public function setModel($name){
			$this->name = $name;
		}

		public function setModelLast($last){
			$this->last = $last;
		}

		public function setAge($age){
			$this->age = $age;
		}

		public function getModel(){
			return "your name is ".$this->name." ".$this->last." age is ".$this->age."<br>";
		}
	}

	$f_name = new Info();
	$f_name->setModel("Jeff Ronald");
	$f_name->setModelLast("Gamasan");
	$f_name->setAge(29);
	echo $f_name->getModel();

	$m_name = new Info();
	$m_name->setModel("Ma. Isabel");
	$m_name->setModelLast("Gamasan");
	$m_name->setAge(25);
	echo $m_name->getModel();

	$c_name = new Info();
	$c_name->setModel("Jameia Fei");
	$c_name->setModelLast("Gamasan");
	$c_name->setAge(4);
	echo $c_name->getModel();
?>

</body>
</html>
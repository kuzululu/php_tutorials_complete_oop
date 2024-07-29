<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	class Info{
	// properties
		private $first_name;
		private $middle_name;
		private $last_name;
		private $age;
		private $add;
		private $contact;
		private $email;
		

// behavior
	 // setters
		public function setFirstName($first_name){
			$this->first_name = $first_name;
		}
		public function setMiddleName($middle_name){
			$this->middle_name = $middle_name;
		}
		public function setLastName($last_name){
			$this->last_name = $last_name;
		}
		public function setAge($age){
			$this->age = $age;
		}
		public function setAdd($add){
			$this->add = $add;
		}
		public function setContact($contact){
			$this->contact = $contact;
		}
		public function setEmail($email){
			$this->email = $email;
		}

	 // getters
		public function getFirstName(){
			return "Name: " . $this->first_name . "<br>";
		}
		public function getMiddlename(){
			return "Middle Name: " . $this->middle_name . "<br>";
		}
		public function getLastName(){
			return "Last Name: " . $this->last_name . "<br>";
		}
		public function getAge(){
			return "Age: " . $this->age . "<br>";
		}
		public function getAdd(){
			return "Address: " . $this->add . "<br>";
		}
		public function getContact(){
			return "Contact: " . $this->contact . "<br>";
		}
		public function getEmail(){
			return "Email: " . $this->email . "<br>";
		}
	}

	// object of the class
	$firstname = new Info();
	$firstname->setFirstName("Jeff Ronald");
	$firstname->setMiddleName("Gaston");
	$firstname->setLastName("Gamasan");
	$firstname->setAge(29);
	$firstname->setAdd("51 Julios Compound");
	$firstname->setContact("091929292");
	$firstname->setEmail("jeffgamasan@gmail.com");
	echo $firstname->getFirstName() . $firstname->getMiddlename() . $firstname->getLastName() . $firstname->getAge() . $firstname->getAdd() . $firstname->getContact() . $firstname->getEmail();
?>

</body>
</html>
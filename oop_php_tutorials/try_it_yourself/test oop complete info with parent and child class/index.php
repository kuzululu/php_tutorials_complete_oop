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
			return $this->first_name;
		}
		public function getMiddlename(){
				return $this->middle_name;
		}
		public function getLastName(){
				return $this->last_name;
		}
		public function getAge(){
				return $this->age;
		}
		public function getAdd(){
				return $this->add;
		}
		public function getContact(){
				return $this->contact;
		}
		public function getEmail(){
				return $this->email;
		}
	}

	class Information extends Info{
		private $fname = "First Name: ";
		private $mname = "Middle Name: ";
		private $lname = "Last Name: ";
		private $ag = "Age: ";
		private $ad = "Address: ";
		private $con = "Contact: ";
		private $em = "Email: ";

		public function Information(){
			return $this->fname . $this->getFirstName() ."<br>".$this->mname.$this->getMiddlename()."<br>".$this->lname.$this->getLastName()."<br>".$this->ag.$this->getAge()."<br>".$this->ad.$this->getAdd()."<br>".$this->con.$this->getContact()."<br>".$this->em.$this->getEmail()."<br>";
		}
	}

	// object of the class
	$firstname = new Information();
	$firstname->setFirstName("Jeff Ronald");
	$firstname->setMiddleName("Gaston");
	$firstname->setLastName("Gamasan");
	$firstname->setAge(29);
	$firstname->setAdd("51 Julios Compound");
	$firstname->setContact("091929292");
	$firstname->setEmail("jeffgamasan@gmail.com");

	$secon_name = new Information();
	$secon_name->setFirstname("Ma. Isabel");
	$secon_name->setMiddleName("Vedad");
	$secon_name->setLastName("Gamasan");
	$secon_name->setAge(25);
	$secon_name->setAdd("51 Julios Compound");
	$secon_name->setContact("091929292");
	$secon_name->setEmail("ysabelle@gmail.com");

	$thr_name = new Information();
	$thr_name->setFirstname("Jameia Fei");
	$thr_name->setMiddleName("Vedad");
	$thr_name->setLastName("Gamasan");
	$thr_name->setAge(4);
	$thr_name->setAdd("51 Julios Compound");
	$thr_name->setContact("None");
	$thr_name->setEmail("None");
	
	echo $firstname->Information() . "<br>";
	echo $secon_name->Information() . "<br>";
	echo $thr_name->Information();
?>

</body>
</html>
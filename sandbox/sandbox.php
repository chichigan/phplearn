<?php 
	//classes
	class User{
		private $email;
		private $name;

		public function __construct($name,$email){
			$this->email = $email;
			$this->name = $name;
		}

		public function login(){
			echo $this->name.' logged in';
		}

		public function getName(){
			return $this->name;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setName($name){
			if(is_string($name)&&strlen($name) > 1){
				$this->name = $name;
				return "Name has been updated to $name";
			}else{
				return "Not a valid name";
			}
		}

		public function setEmail($email){
			if(strpos($email,'@') > -1){
				$this->email = $email;
			}
		}
	}

	class AdminUser extends User{
		public $level;

		public function __construct($name,$email,$level){
			$this->level=$level;
			parent::__construct($name,$email);
		}
	}

	$userOne = new User('mario','mario@thenetninja.co.uk');
	$userTwo = new User('luigi','luigi@thenetninja.co.uk');
	$userThree= new AdminUser('yoshi','yoshi@thenetninja.co.uk',5);

	//echo $userOne->getName();
	echo $userThree->getName().'<br>';
	echo $userThree->getEmail().'<br>';
	echo $userThree->level;


?>

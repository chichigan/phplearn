<?php 
	//classes
	class User{
		protected $email;
		public $name;
		public $role = 'member';

		public function __construct($name,$email){
			$this->email = $email;
			$this->name = $name;
		}
		
		public function __destruct(){
			echo "The user $this->name was removed<br>";
		}
		
		public function __clone(){
			$this->name=$this->name.'(cloned)<br>';
		}

		public function login(){
			echo $this->name.' logged in';
		}

		public function message(){
			return "$this->email sent a message";
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
		public $role='admin';

		public function __construct($name,$email,$level){
			$this->level=$level;
			parent::__construct($name,$email);
		}
		
		public function message(){
			return "$this->email, an admin, sent a message";
		}
	}

	$userOne = new User('mario','mario@thenetninja.co.uk');
	$userTwo = new User('luigi','luigi@thenetninja.co.uk');
	$userThree= new AdminUser('yoshi','yoshi@thenetninja.co.uk',5);

	// echo $userOne->role.'<br>';
	// echo $userThree->role.'<br>';

	// echo $userTwo->message().'<br>';
	// echo $userThree->message().'<br>';
	
	$userFour = clone $userOne;
	echo $userFour->name;
?>

<?php
$program = new MyBank; 
class MyBank{

	public function __construct() {
		if(isset($_REQUEST['page'])) {
			$meth = $_REQUEST['page'];
			$this->$meth();
		} else {
			$this->main_page(); 
		}
	}
	     public $user_name;
	     public static   $password;
	     
	public function sign_in(){
	$this->user_name = $_POST['user_name'];
	$this->password = $_POST['password'];
	  if(empty($this->user_name)){
	  	@$message="Please enter your user name<br>";
	  }elseif(empty($this->password)){
	  	@$message.="Please enter your Password<br>";
	  }else{
	  	$message =' ';
	  }
	  if($message != ' '){
	  	include ('./signin.php');
	  	exit;
	  }else{
	  $obj = new varify_user($this->user_name,$this->password);
		  }
	}
}
class varify_user{
	public function __construct($a,$b){
		if (file_exists("./csv/$a.csv") ) {
			$this->ritePass($a,$b);
		}else{
			$msg = new errar();
		}
	}
  public function ritePass($a,$b){
  	$row = 1;
  	if (($handle = fopen("./csv/$a.csv", "r")) !== FALSE) {
  		while (($record = fgetcsv($handle, 0, ",")) !== FALSE) {
  			if($row == 1) {
  				$keys = $record;
  				$row++;
  			}	
  		}	
  	}	
  				$id =($keys[3]);
  				
  				$us =($keys[0]);
  				$us = strtoupper($us);
  				if( $b == $id){
  					session_start();
  					$_SESSION['user_info'] = array();
  					$_SESSION['user_info'][] = $a;
  					//print_r($_SESSION);
  					//session_destroy();
  					$mymessage= "Welcome $us you are now in the bank<br>";
  					include ('./welcome.php');
  				}else{
  					$msg = new errar();
  				}
  				
  }	
}
class errar {
	public function __construct(){
		$message= "You are not logged in yet please check your userID or password";
		include ('./signin.php');
		exit;
	}
	
}
 ?>
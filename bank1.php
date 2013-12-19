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
  function main_page(){
  	if(file_exists("./mainpage.html"))
  		include './mainpage.html';
  } 
   function sign_up(){
   $obj = new sign_up;
   }
}
class sign_up{
	public $time_to_csv;
	public $user_name;
	public function __construct(){
		$first_name =($_POST['first_name']);
		$last_name =($_POST['last_name']);
		$this->user_name =($_POST['user_name']);
		$password =($_POST['password']);
		if(empty($first_name)){
			$message="You must enter you first name<br>";
		} if (empty($last_name)){
			@$message.="You must enter you last name<br>";
		}if (empty($this->user_name)){
			$message.="You must choose a user name<br>";
		}if (empty($password)){
			$message.="You must choose a password<br>";
		}if(empty($message)){
			$message="Entry is valid"; 
			$timestamp = time();
		    $this->time_to_csv = strftime ("%Y-%m/%d %H:%M:%S", $timestamp);
		    echo $this->time_to_csv;
		    array_push($_POST, "$this->time_to_csv");
		}
		     // echo "$message";
		      
		if($message!="Entry is valid"){
			include ('./signup.php');
			
			exit;
			
			
		}
		
		if(!file_exists("./csv/bank_file.csv") ){
			touch('csv/bank_file.csv');
			
			 	$first_line= array("First_name","Last_name","User_name","Password","Custumer_since");
			 	
			$fp = fopen("./csv/bank_file.csv", 'a');
				
			       fputcsv($fp,$first_line);
		        	fputcsv($fp,$_POST);
		    fclose($fp);
		    $this->write_csv($_POST,$this->user_name);
		    exit;
		} else{
		$this->read_signUpForm($_POST);
		}
	}
	
	public function read_signUpForm($_POST) {
		$row = 1;
		if (($handle = fopen("./csv/bank_file.csv", "r")) !== FALSE) {
			while (($record = fgetcsv($handle, 0, ",")) !== FALSE) {
				if($row == 1) {
					$keys = $record;
					$row++;
				} else { 
					$records[] = array_combine($keys, $record);
				}		}
			}
			$filecsv ='bank_file';
			$row = 0; 
			foreach($records as $key => $val){
				$user = $val['User_name'];
				if ($user ==($this->user_name)){
					$row++ ;
				}
			}
			if($row  !==0){
				echo 'Sorry no duplicate';
			}
	
			else {
				$this->write_csv($_POST ,$filecsv);
				$this->write_csv($_POST,$this->user_name);
			}
	}
	public function write_csv($a,$b){
	
		$fp = fopen( "csv/$b.csv", 'a');
	
		fputcsv($fp, $a);
		fclose($fp);
	}
}
	?>
	
	
	
	
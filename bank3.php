<?php 
//header('location:bank3.php');
session_start();
if(empty($_SESSION)){

	$message="please sign in or sign up";
	include('./signup.php');
	exit;
}

	
$program = new MyBank;
class MyBank{
public $type;
public $amount;
public $source;

	public function __construct() {
		if(isset($_REQUEST['page'])) {
			$meth = $_REQUEST['page'];
			$this->$meth();
		} else {
			
		}
	}
	public function asd(){
		//print_r($_REQUEST);
	}

	public function addtrance(){
		
        if(isset($_POST['moretransaction'])){
        	$this->pushInSession();
        	$this->moretransaction();
        }else{
        	
        	
        	$this->pushInSession();
        	if (($handle = fopen("./csv/test.csv", "r")) !== FALSE) {
        		while (($recor = fgetcsv($handle, 0, ",")) !== FALSE) {
        			
        				$keys = $recor;  
 
        		}
        	}
        			if(!isset($keys[3])){
        				$current_balance = 0;
        			}else{
        				$current_balance = $keys[3];
        			}
        			//print_r($current_balance)	;
        	$disp = new DISPLAY_TRANS($current_balance);
        	$disp->displayTransaction();
        	
        }
	
	}
	public function pushInSession(){
		$this->type = $_POST['type'];
		$this->amount= $_POST['amount'];
		$this->source= $_POST['source'];
		$transaction = array ("$this->type", "$this->amount", "$this->source");
		session_start();
		is_array ($_SESSION['trans_info'] ) or $_SESSION['trans_info']= array();
		
		
		$_SESSION['trans_info'][] = $transaction; 
		
	}
	
   public function moretransaction(){
   	
   	include('./entertrans.php');
   	echo "msg14";
   	
   	$timestamp = time();
   	$time_to_csv = strftime ("%Y-%m/%d %H:%M:%S", $timestamp);
   	
   	array_push($_POST, "$time_to_csv");
   	
   	
   	//print_r($_POST);
   
   }
   
  




}
 class DISPLAY_TRANS{
 	
 	public $starting_balance;
 	public $current_balance;
 	
 	public function __construct($b){
 		$this->starting_balance = $b;
 		$this->current_balance = $b;
 	}
 	
 	public function displayTransaction(){
        foreach($_SESSION['trans_info'] as $row){
        	if($row[0] == 'credit'){
        		$this->current_balance =  $this->current_balance + $row[1];

        	}else{
        		$this->current_balance =  $this->current_balance - $row[1];
        		
        	}
               //echo $row[1] . "||" . $row[2] . "||" . $row[0] ."||" . $this->current_balance . "<br>" ;
        	@$transaction_display  .= '<tr>' .
        			'<td> ' . $row[1] . '</td>' .
        			'<td> ' . $row[2] . '</td>' .
        			'<td> ' . $row[0] . '</td>' .
        			'<td> ' . $this->current_balance . '</td>' .
        			'</tr>';
                $todb[] = array($row[1],$row[2],$row[0],$this->current_balance);}
                
               // unset($_SESSION['trans_info']);
              //  unset($_POST['type']);
             //   unset($row[1]);
                //print_r($row);
               // print_r($_POST);
                //print_r($_SESSION['trans_info']);
          
       
       // print_r($_REQUEST);
            $cb = $this->current_balance;
             $objtodb = new updatedb($todb);
            // header('location:./display.php');
            include("./display.php");
            // unset($_SESSION['trans_info']);
             exit;
           
   }
 	

 	
 	
 	
 }

 class updatedb{
 	public function __construct($todb){
 		$fp = fopen( "csv/test.csv", 'a');
 	foreach ($todb as $a){
 		fputcsv($fp, $a);
 	}
 		
 	
 	}
 	
 	
 }
?>
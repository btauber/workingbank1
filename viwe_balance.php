<?php 
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

 ?>       	
        
  <!DOCTYPE html>
	<html>
	<head>
  			<title>WELCOME TO THE PCS BANK</title>
	<link rel='stylesheet' href='mainpage.css'>
	<link rel="shortcut icon "  href="./israel.ico">
	<style>
	
	 </style>
	</head>
	<body>
  			<h1>WELCOME TO THE<strong> PCS </strong>BANK</h1>
  			<h2>Your Balance is $ <?php echo $current_balance;?>:</h2>
  			<h3></h3>
  			
  			
  			
  			
  			<form action="destroy.php" method="post">
           <input type="submit" value ="Log out"> 
           </form>
  			
  			
  			</body>
	
	</html>	
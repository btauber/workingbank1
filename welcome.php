<?php 
  			if(empty($_SESSION)){
              
  				$message="please sign in or sign up"; 
  				include('./signup.php');
  				exit;
  			}
  			
?> 

<!DOCTYPE html>
	<html>
	<head>
  			<title>WELCOME TO THE PCS BANK</title>
	<link rel='stylesheet' href='mainpage.css'>
	<link rel="shortcut icon "  href="./israel.ico">
	</head>
	<body>
  			<h1>WELCOME TO THE<strong> PCS </strong>BANK</h1>
  			<h2 style = " text-align: center;"><?php echo $mymessage;?></h2>
  			
  			
 			
 	
  			
  			<div class="button">
  			
  			<a  href="./viwe_balance.php"><button type ="button">Viwe Balance</button></a> 
  			 <a  href="./entertrans.php"><button type ="button">Add Transaction</button></a> 

  			 <form action="destroy.php" method="post">
           <input type="submit" value ="Log out"> 
           </form>
           <div id="newbill"></div> 
  			</body>
	
	</html>	
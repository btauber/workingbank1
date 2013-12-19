<?php 
      session_start();
  			if(empty($_SESSION)){
              
  				$message="please sign in or sign up";
  				include('./signup.php');
  				
  				exit;
  			}else{
  				//print_r($_SESSION);
  				//print_r($_POST);
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
  			<h2></h2>
  			<h3></h3>
  			
  			<form  id = "form" action="./bank3.php?page=addtrance" method="post">
  			
  			     
  			<label for = "type"> Type of transaction:</label> <br>
  			  <input type ="radio" name = "type" value = "credit" required> Credit:
  			    <input type ="radio" name = "type" value = "debit" required> Debit:
  			       
  			       
  			     <label for = "amount">Amount:</label>
  			      <input type = "number" name = "amount" placeholder = "Enter an amunt" required>
  			      <label for = "source">Source:</label> 
  			      <input type = "text" name = "source" placeholder = " Enter a source" required>
  			      
  			      
  			      
  			      More transaction:<input type = "checkbox" name =" moretransaction" >
  			      <input type ="submit" value = "Send">
  			      <input type = "reset" value= "reset">
  			      
  			     
  			</form>
  			
  			<form action="destroy.php" method="post">
           <input type="submit" value ="Log out"> 
           </form>
  			
  			
  			</body>
	
	</html>	
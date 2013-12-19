<!DOCTYPE html>
<html>
	<head>
		<title>WELCOME TO THE PCS BANK</title>
		<link rel='stylesheet' href='mainpage.css'>
		<link rel="shortcut icon "  href="./israel.ico">
	</head>

	<body>
		<h1>WELCOME TO THE<strong> PCS </strong>BANK</h1>
		<div id="form">
<FORM action="./bank1.php?page=sign_up" method="post"> 
	  		<LABEL for="first_name">First name: </LABEL>
	  		  <INPUT type="text" name="first_name" placeholder="First name"><BR>
	  		     <LABEL for="last_name">Last name: </LABEL>
	  		       <INPUT type="text" name="last_name" placeholder="Last name"><BR>
	  		         <LABEL for="user_name">Please Create a User name:</LABEL>
	  	    	  <INPUT type="text" name="user_name" placeholder ="User name"><BR>
	  	       <LABEL for="password">Please Create a Password:</LABEL>
	  		<INPUT type="password" name="password" placeholder="Password"><BR>
	  		    <INPUT type="submit" value="Send"> <INPUT type="reset">
	 </FORM>
	  		</div>
	  		<div class="button"> <a href="./signin.php"><button type="button">Already a custumer please Sign in</button></a> </div>
	  		<div class="button"> <a href="./mainpage.html"><button type="button">Home</button></a> </div>
	  		<div id="newbill">  </div>
	  		<div id="errer"> <?php echo @$message; ?> </div>
	  	</body> 
	  		
</html>
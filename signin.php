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
               <FORM action="./bank2.php?page=sign_in" method="post">
	  	        	<LABEL for="user_name">User name: </LABEL>
	  	            	<INPUT type="text" name="user_name"placeholder="User name"><BR>
	  	            	<LABEL for="password">Password: </LABEL>
	  		         <INPUT type="password" name="password"placeholder="Password"><BR>
	  		     <INPUT type="submit" value="Send"> <INPUT type="reset">
	          </FORM>
	  		</div>
	  		      <div class="button"> <a href="./signup.php"><button type="button">Not a custumer yet please sign up</button></a> </div>
	  		      <div class="button"> <a href="./mainpage.html"><button type="button">Home</button></a> </div>
	  		<div id="newbill"> </div>
	  		<div id="errer"> <?php echo @$message; ?> </div>
	  	</body>
	  		
</html>
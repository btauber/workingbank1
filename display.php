<!DOCTYPE html>
	<html>
	<head>
  			<title>WELCOME TO THE PCS BANK</title>
	<link rel='stylesheet' href='mainpage.css'>
	<link rel="shortcut icon "  href="./israel.ico">
	<style>
	table{
	border-collapse: collapse;
	}
	th,td{
	border:1px solid black;
	border-collapse: collapse;
	text-align: right;
	}
	th.left, td.left{text-align:left;}
	#total{font-weight:bold;}
	
	 </style>
	</head>
	<body>
  			<h1>WELCOME TO THE<strong> PCS </strong>BANK</h1>
  			<h2>Your latest transaction:</h2>
  			<h3></h3>
  			<table id = "form">
  				<tr>
  					<th class ="left"> Amount</th>
  					<th>Source</th>
  					<th>Type</th>
  					<th>Balance</th>
  				</tr>
  				<?php echo $transaction_display; ?>
  				<tr id = "total">
  					<th class = "left">Current Balance</th>
  					<td></td>
  					<td></td>
  					<td><?php echo $cb;?></td>
  				</tr>
  			
  			
  			</table>
  			
  			
  			
  			<form action="destroy.php" method="post">
           <input type="submit" value ="Log out"> 
           </form>
  			
  			
  			</body>
	
	</html>	
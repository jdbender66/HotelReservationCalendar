<html>
	<head>
		<style>
			#loginbox{
				padding: 15px;
			}
			
			#categories{
				background-color:white;
			}
			
			#garland{
				width: 400px;
				height: 70px;
				margin-top: -20px;
				margin-left: auto;
				margin-right: auto;
			
			}
			
			#snowflake{
				margin-top: -10px;
				margin-bottom: 5px;
			}
			
			.booked{
				background-color: red;
				font-weight: bold;
			
			}
			
			body{
				background-image: url('inn.jpg');
				background-attachment: fixed;
			}
			
			#container2{
				box-shadow: 12px 12px 12px black;
				border: solid black 1px;
				width: 800px;
				background-color: #9cc4db;
				border-radius: 25px;
				padding: 25px;
				margin-top:25px;
			}
			
			#reservationtable{
				background-color: white;
				border: solid black 3px;
				border-collapse: collapse;
			
			}
			
			#reservationtable th, td{
				background-color: white;
				border: solid black 3px;
			
			}
			
			h1, h2, h3{
				font-family: Arial, Helvetica, sans-serif;
			
			}
			
			
		</style>
	</head>
	
	<body>
	
	
		<center>
			<div id="container2">
			
				<a href="mainMenu.php">Back to Main Menu</a>
				<br>
			
				<h1>RESERVATION CALENDAR</h1>
				
						<?php
							//begin session
							session_start();
							//identify user
							echo "<h2>Current User: ".$_SESSION["user_Name"]."</h2>";
							
					
							//include database
							include 'sis_include_DB.php';
								
							
						?>	
						
						
						<?php
							//this function takes two dates and calculates an array of all the dates in between
							function GetDays($strDateFrom,$strDateTo){  
								 $aryRange=array();
								//convert string dates into date variables that can be subtracted from each other
								$iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
								$iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));
								
								//testing if dates are inbetween the two, and putting the results into an array
								if ($iDateTo>=$iDateFrom)
								{
									array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
									while ($iDateFrom<$iDateTo)
									{
										$iDateFrom+=86400; // add 24 hours
										array_push($aryRange,date('Y-m-d',$iDateFrom));
									}
								}
								return $aryRange;
							}  
						
							
						
							//include generator of calendar
							include 'calendarGenerator.php';
						
						
						?>

					
					
				
			
			</div>
		</center>
	</body>
</html>
<html>
	<head>
		<style>
		
			h1, h2, h3{
			font-family: Arial, Helvetica, sans-serif;
			
			}
			
			p{
			font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
			font-size: 17px;
			font-weight: bold;
			}
			
			#loginbox{
				padding: 15px;
			}
			
			#categories{
				background-color:white;
			}
			
			body{
				background-image: url('inn.jpg');
				background-attachment: fixed;
				
			}
			
			#container{
				box-shadow: 12px 12px 12px black;
				border: solid black 1px;
				width: 800px;
				background-color: #9cc4db;
				border-radius: 25px;
				padding: 25px;
				margin-top:25px;
				
			}
			
			#description{
				margin-left: 40px;
				margin-right: 40px;
				
			
			}
			
			#description img{
				margin: 10px;
			
			}
			
			#crackers{
				float: left;
				border: solid black 3px;
				
			}
			
			#breakfast{
				float: right;
				border: solid black 3px;
			}
			
			#cr{
				margin-top: 20px;
				border: solid black 5px;
			}
			
			
			ul {
				list-style-type: none;
				margin: 10px;
				padding: 0;
			}
			
			li {
				display: inline;
				padding-right: 15px;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				font-size: 20px;
				
			}
			
			#video{
				border: solid black 3px;
			}
			
			#minilogo{
			
			margin: -15px;
			}
			
			#snowy{
				border: solid black 3px;
				width: 600px;
			}
			
		</style>
	</head>
	
	<body>
		<center>
			<div id="container">
			<a href="index.php">Back to Login</a>
			<br/>
			
			
				
				<?php
				
					//hold session variables
					session_start();
					
				
					
					
					//include file to access database
					include 'sis_include_DB.php';
					
					//if submit is pressed
					if (isset($_POST['submit2']) ){
					
						//dont display login if submit is pressed
						$displayNewuser = false;
						
						//if anything was entered in both fields
						if (!empty($_POST['user_Name2']) && !empty($_POST['pass_Word2']))
						{
						
							//turns post variables into normal ones to use in the query
							$new_Username = $_POST['user_Name2'];
							$new_Password = $_POST['pass_Word2'];
							$new_Lname = $_POST['last_Name'];
							$new_Fname = $_POST["first_Name"];
							$new_Streetaddress = $_POST["street_Address"];
							$new_City = $_POST['city'];
							$new_Zip = $_POST["zip_Code"];
							$new_Phone = $_POST["phone_Number"];
							$new_Email = $_POST["email_Address"];
					
							//query for inserting new user
							$query = "INSERT INTO users VALUES ( '','$new_Username','$new_Password','$new_Lname','$new_Fname','$new_Streetaddress','$new_City','$new_Zip','$new_Phone','$new_Email')";
							
							//store in variable
							$result = mysql_query($query);
							
							//check for error, or inform of success
							if(! $result )
								{
									die('Could not enter data: ' . mysql_error());
								}
								else
								{
									echo '<br/>';
									echo "Profile Created successfully! Please return and enter your new username and password to make a reservation.\n";
									echo '<a href="index.php" >Click here to return! </a>';
								}
								//close mysql link
								mysql_close($link);
						
						
						
							
								
						}
						else {
							//inform of incomplete form
							echo "<p> *You didnt enter a username and password!</p>";
							$displayNewuser = true;
						}
					}
					else {
					//if submit is not hit, display form
						$displayNewuser = true;
					}
					
					//if submit is not pressed, and $displaylogin is still true
					if ($displayNewuser) {
						
						echo "<h1>Create Login</h1>";
						echo "<img id = 'minilogo' src='cci.jpg'  />";
						echo"<br/>";
						echo "<p>Please enter your information </p>";


					?>
					
					<!--Form for new user-->
					<form action =  "newUser.php" method = "post">
						<table align = "center" border="0">  
							<tr>
								<td>Username: </td>
								<td><input type = "text" name = "user_Name2" maxlength = "45" value = ""/></td>
								
							</tr>  
							<tr>
								<td>Password: (Max. Length is 10 characters)</td>
								<td><input type = "pass_Word" name = "pass_Word2" maxlength = "45" value=""/></td>
							
							</tr>  
							<tr>
								<td>Last Name:</td>
								<td><input type = "text" name = "last_Name" maxlength = "45" value=""/></td>
								
							</tr>  
							<tr>
								<td>First Name</td>
								<td><input type = "text" name = "first_Name" maxlength = "45" value=""/></td>
						
							</tr>  
							<tr>
								<td>Street Address</td>
								<td><input type = "text" name = "street_Address" maxlength = "45" value=""/></td>
								
							</tr>  
							<tr>
								<td>City</td>
								<td><input type = "text" name = "city" maxlength = "45" value=""/></td>
							</tr>  
							<tr>
								<td>Zip Code</td>
								<td><input type = "text" name = "zip_Code" maxlength = "11" value="XXXXX"/></td>
							</tr>  
							<tr>
								<td>Phone Number</td>
								<td><input type = "text" name = "phone_Number" maxlength = "45" value="XXX-XXX-XXXX"/></td>
							</tr>  
							<tr>
								<td>Email Address</td>
								<td><input type = "text" name = "email_Address" maxlength = "100" value=""/></td>
								
							</tr>  
							<tr>
								<td colspan = 2><input type = "submit" name = "submit2"  value = "Register User"></td>
								<!--submit button -->
							</tr> 
						</table>  
					</form>
					
					<?php
					}
					?>
				
			</div>
		</center>
	</body>
</html>
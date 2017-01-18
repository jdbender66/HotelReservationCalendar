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
			
			
				
				<?php
				
					//hold session variables
					session_start();
					
				
					
					
					//include file to access database
					include 'sis_include_DB.php';
					
					//if submit is pressed
					if (isset($_POST['submit']) ){
					
						//dont display login if submit is pressed
						$displaylogin = false;
						
						//if anything was entered in both fields
						if (!empty($_POST['user_Name']) && !empty($_POST['pass_Word']))  {
						
							//query for username and password
							$query = "SELECT user_Name, pass_Word, user_Id FROM users";
							
							//store in variable
							$result = mysql_query($query);
							
							//scan for match
							while ($row = mysql_fetch_array($result)) {
								if ($row['user_Name'] == $_POST['user_Name']) {
									if ($row['pass_Word'] == $_POST['pass_Word']) {
										$user_Id = $row['user_Id'];
										//store important data to session variables
										$_SESSION["user_Name"] = $_POST['user_Name'];
										$_SESSION["pass_Word"] = $_POST['pass_Word'];
										$_SESSION["user_Id"] = $user_Id;
										
										$outcome = 1;
										$displaylogin = false;
										//echo "password  match";
										break; 
										
									}
									else {
										$outcome = 2;
										$displaylogin = true;
										//echo "password doesnt match";
									}
								}
								else {
									$outcome = 2;
									$displaylogin = true;
									//echo "username doesnt match";
								}
							}
							//show category page if success
							if ($outcome == 1) {
								//call menu file
								header("Location: mainMenu.php");
								
							}
							if ($outcome == 2) {
							
								echo "<p> *Your username and/or password is incorrect! </p>";
							}		
						}
						else {
						
							echo "<p> *Your username and/or password is incorrect!</p>";
							$displaylogin = true;
						}
					}
					else {
						$displaylogin = true;
					}
					
					//if submit is not pressed, and $displaylogin is still true
					if ($displaylogin) {
						
						echo "<h1>Carmel Cove Inn Reservation Service</h1>";
						echo "<img id = 'minilogo' src='cci.jpg'  />";
						echo"<br/>";
						echo "<p>Please enter your username and password. </p>";
						echo '<a href="newUser.php" >Click here to create a profile if you do not have one!</a>';
						echo"<br/>";


					?>
					
					<!--Form for username and password-->
					<form action =  "index.php" method = "post">
						<table align = "center" border="0">  
							<tr>
								<td>Username: </td>
								<td><input type = "text" name = "user_Name" maxlength = "45" value = ""/></td>
								<!-- Create sticky textbox for the username-->
							</tr>  
							<tr>
								<td>Password: (Max. Length is 10 characters)</td>
								<td><input type = "pass_Word" name = "pass_Word" maxlength = "45" value=""/></td>
								<!-- Create textbox for the password, not sticky privacy-->
							</tr>  
							<tr>
								<td colspan = 2><input type = "submit" name = "submit"  value = "Login"></td>
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
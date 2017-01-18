<html>
	<head>
		<style>
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
			
			#container2{
				box-shadow: 12px 12px 12px black;
				border: solid black 1px;
				width: 800px;
				background-color: #9cc4db;
				border-radius: 25px;
				padding: 25px;
				margin-top:25px;
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
			
				<h1>GIFT CERTIFICATES</h1>
				
				<!--Table of prexisting gift certificates begins--> 
				
				<table id = "categories" border="3" cellpadding="2" cellspacing="2" summary="" width="500px">
				  <tr>
					
					
						<th>Gift Certificate ID #</th>
						<th>Gift Amount</th>
						<th>Recipient</th>
						<th>Occasion</th>
					 
					
				  </tr>
				  
					
						<?php
							//begin session
							session_start();
							//identify current user
							echo "<h2>Current User: ".$_SESSION["user_Name"]."</h2>";
							
							//if submit is pressed, and a new gift certificate is trying to be made...
							if (isset($_POST['submitrequest'])){
							
								
								include 'sis_include_DB.php';
								//include database
								
								
								//assign post variables to variables for the INSERT query
								$new_Amount = $_POST['gift_Amount'];
								$new_Recipient = $_POST['gift_Recipient'];
								$new_Occasion = $_POST['gift_Occasion'];
								$new_User = $_SESSION["user_Id"];
								
								//if all the fields are full
								if(!empty($new_Amount) && !empty($new_Recipient) && !empty($new_Occasion)) {
									//query to insert
									$query = "INSERT INTO gift_certificates VALUES( '','$new_Amount','$new_Recipient','$new_Occasion','$new_User')";
									$result = mysql_query( $query );
									//check for success
									if(! $result )
									{
										die('Could not enter data: ' . mysql_error());
									}
									else
									{
										//if success, close mysql link and reload page with new entry listed
										echo "Gift Certificate Request Made\n";
										mysql_close($link);
										header('Location: gift_Certificates.php');
									}
									
									
									
								}
								else{
									//inform of failure
									echo "<h3>All fields are not complete</h3>\n";
								}
							
							
							}
							

							
							
							include 'sis_include_DB.php';
							
							//query for gift certificates
							$query = "SELECT gift_certificates.giftcertificate_Id, gift_certificates.gift_Amount, gift_certificates.gift_Recipient, gift_certificates.gift_Occasion FROM gift_certificates WHERE fk_user_Id = ".$_SESSION['user_Id']."";
							$result = mysql_query($query);
							
							
							//print gift certificates for that user into table
							while ($row = mysql_fetch_array($result)) {
							
							
								echo "<tr>";
									echo "<td>";
										echo $row['giftcertificate_Id'];
									echo "</td>";
									
									echo "<td>";
										echo $row['gift_Amount'];
									echo "</td>";
								
									echo "<td>";
										echo $row['gift_Recipient'];
									echo "</td>";
									
									echo "<td>";
										echo $row['gift_Occasion'];
									echo "</td>";
								echo "</tr>";
							}
						
						?>
					
				</table>
				<br/>
				<br/>
				
				<h1>New Gift Certificate</h1>
				<form action =  "gift_Certificates.php" method = "post">
						<table align = "center" border="0">  
							<tr>
								<td>Gift Amount:</td>
								<td><input type = "text" name = "gift_Amount" value = ""/></td>
								
							</tr>  
							<tr>
								<td>Recipient:</td>
								<td><input type = "text" name = "gift_Recipient"  /></td>
								
							</tr>  
							<tr>
								<td>Occasion:</td>
								<td><input type = "text" name = "gift_Occasion"  /></td>
								
							</tr>  
							<tr>
								<td colspan = 2><input type = "submit" name = "submitrequest"  value = "Submit Request"></td>
								<!--submit button for new gift certificate -->
							</tr> 
						</table>  
					</form>
					<img  src='gift_certificate.jpg'  align='center' />
			</div>
			<br/>
			<br/>
		</center>
	</body>
</html>
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
			
				<h1>YOUR RESERVATIONS</h1>
				
				<!--Reservation Table begins--> 
				
				<table id = "categories" border="3" cellpadding="2" cellspacing="2" summary="" width="500px">
					<tr>
					
					
						<th>Reservation ID #</th>
						<th>Arrival Date</th>
						<th>Departure Date</th>
						<th>Special Message</th>
						<th>Room Number</th>
						
					 
					
					</tr>
				  
					
						<?php
							//begin session
							session_start();
							//identify current user
							echo "<h2>Current User: ".$_SESSION["user_Name"]."</h2>";
							
							
							
							//if submit is pressed
							if (isset($_POST['submitreservation'])){
							
								
								include 'sis_include_DB.php';
								//include databse connection
								
								
								//assign post input to variables for insert statement
								$new_Arrival = $_POST['arrival_Date'];
								$new_Departure = $_POST['departure_Date'];
								$new_Message = $_POST['special_Message'];
								$new_Number = $_POST["room_Number"];
								$new_Person = $_SESSION["user_Id"];
								
								//if the fields are full
								if( !empty($new_Arrival) && !empty($new_Departure) && !empty($new_Message)  && !empty($new_Number) ) {
									//query to insert
									$query = "INSERT INTO reservations VALUES( '','$new_Arrival','$new_Departure','$new_Message','$new_Number','$new_Person')";
									$result = mysql_query( $query );
									//check for success
									if(! $result )
									{
										die('Could not enter data: ' . mysql_error());
									}
									else
									{
										//reload page on success
										echo "Gift Certificate Request Made\n";
										header('Location: reservations.php');
									}
									//close link
									mysql_close($link);
									
								}
								else{
									//feedback for failure
									echo "<h3>All fields are not complete</h3>\n";
								}
							
							
							}
							
							
							//include database
							include 'sis_include_DB.php';
							
							//query for reservations
							$query = "SELECT reservations.reservation_Id, reservations.arrival_Date, reservations.departure_Date, reservations.special_Message, reservations.fk_room_Number FROM reservations WHERE fk_user_Id = ".$_SESSION['user_Id']."";
							$result = mysql_query($query);
							
							
							//print reservations in table
							while ($row = mysql_fetch_array($result)) {
							
							
								echo "<tr>";
									echo "<td>";
										echo $row['reservation_Id'];
									echo "</td>";
									
									echo "<td>";
										echo $row['arrival_Date'];
									echo "</td>";
								
									echo "<td>";
										echo $row['departure_Date'];
									echo "</td>";
									
									echo "<td>";
										echo $row['special_Message'];
									echo "</td>";
									echo "<td>";
										echo $row['fk_room_Number'];
									echo "</td>";
								echo "</tr>";
							}
							
							
							
							
						
						?>
					
					
					
				</table>
				<br/>
				<br/>
				
				<h1>New Reservation</h1>
				<form action =  "reservations.php" method = "post">
						<table align = "center" border="0">  
							<tr>
								<td>Arrival Date:</td>
								<td><input type = "text" name = "arrival_Date" value = "YYYY-MM-DD"/></td>
								
							</tr>  
							<tr>
								<td>Departure Date:</td>
								<td><input type = "text" name = "departure_Date"  value="YYYY-MM-DD"/></td>
								
							</tr>  
							<tr>
								<td>Special Message:</td>
								<td><input type = "text" name = "special_Message"  /></td>
								
							</tr>  
							<tr>
								<td>Room Number</td>
								<td>
									<select name="room_Number">
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										  <option value="9">9</option>
										  <option value="10">10</option>
									</select>
								</td>
							</tr> 
							<tr>
								<td colspan = 2><input type = "submit" name = "submitreservation"  value = "Submit Request"></td>
								<!--submit button for new reservation -->
							</tr> 
						</table>  
					</form>
					
					<?php
						include 'sis_include_DB.php';
							//query for room table
							$query = "SELECT rooms.room_Number, rooms.room_Price, rooms.room_Tier, rooms.room_Description FROM rooms";
							$result = mysql_query($query);
							
							echo "<table id = 'categories' border='3' cellpadding='2' cellspacing='2' summary='' width='450px'>";
							
									echo "		<tr>";
									
									
										
										echo "		<th>Room Number</th>";
										echo "		<th>Room Price</th>";
										echo "		<th>Room Tier</th>";
										echo "		<th>Description</th>";
										
									 
									
											echo "		</tr>";
							//print table of room info for user to browse before making a reservation
							while ($row = mysql_fetch_array($result)) {
							
							
								echo "<tr>";
									echo "<td>";
										echo $row['room_Number'];
									echo "</td>";
									
									echo "<td>";
										echo $row['room_Price'];
									echo "</td>";
								
									echo "<td>";
										echo $row['room_Tier'];
									echo "</td>";
									
									echo "<td>";
										echo $row['room_Description'];
									echo "</td>";
								echo "</tr>";
							}
							echo "</table>";
							?>
					
			</div>
			<br/>
			<br/>
		</center>
	</body>
</html>
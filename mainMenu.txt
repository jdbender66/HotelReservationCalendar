					
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

					session_start();


					echo "<a href='logout.php'>Click here to log out</a>";
					//displays Main Menu and brief description page
					echo "<h1>Main Menu</h1>";
					echo "<hr>";
					
					echo "<ul>";
						//Three services options
						echo  "<li><a href='gift_Certificates.php'>Gift Certificate Manager</a></li>";
						echo   "<li><a href='calendar.php'>Availability Calendar</a></li>";
						echo  "<li><a href='reservations.php'>Make a Reservation</a></li>";
					echo "</ul>";
					//All this below is more of visual information about the inn, not very functional
					echo "<img src='activities.png'  align='center' />";
					
					echo " <br/>";
					echo " 
						<div id='description'>
							<p>
							<img id = 'breakfast' src='breakfast.jpg' />The Carmel Cove Inn is a ten-room bed & breakfast located in Deep Creek Lake, MD. Nestled in the mountains, it is the perfect place to escape the city for a weekend and relax. 
							The lake offers numerous activities such as swimming, hiking, biking, canoeing, kayaking, skiing, snowboarding, tubing, horseback riding, fishing, high-ropes, ziplines, disc golf, and more!  
							  It is a great place to spend a birthday, honeymoon, anniversary, or holiday. Each morning a complimentary gourmet breakfast is served to you in our beautiful breakfast room. 
							<img id = 'crackers' src='crackers.jpg' />Coffee, tea, hot chocolate, beer, and wine are all available 24/7. At night we light a bonfire at our fire circle and have smore's available to reconnect with your inner boy or girl scout. 
							If you have a terrace room, breakfast can be brought to your room so you can eat while gazing into the bustling forest. Please let us make your next visit to the lake as special as it should be.
							</p>
							<img id = 'cr' src='cr.jpg' />
							<img id = 'cr' src='snacks.jpg'  align='center' />
						</div>
						<iframe id='video' width='420' height='315' src='//www.youtube.com/embed/sgeEjoaOsco'  allowfullscreen></iframe>
						<br/><br/>
						<img id = 'snowy' src='snowy.jpeg'  align='center' />
					";
				?>
			</div>
		</center>
	</body>
</html>
<?php
session_start();
session_destroy();
?>

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
			
		</style>
	</head>
	
	<body>
		<center>
			<div id="container">
			<!--Gives a message that the user has been logged out-->
			
			<h1>Thank you for using the reservation service! <a href='index.php'>Click here to login again:</a></h1>
			</div>
		</center>
	</body>
</html>
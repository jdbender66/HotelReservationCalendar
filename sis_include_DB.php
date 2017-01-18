<html>
	<head>
		<title> SIS Database Connection </title>
	</head>
	
	<body>
		<?php
		$host = 'localhost'; //the server
		$username = 'jdb117'; //my username
		$password = '3689854'; //my peoplesoft number
		$database = 'jdb117'; //name of my database

		$link = mysql_connect($host, $username, $password); //set up a connection to the database

		if (!$link) { //if the connection failed
			die('Could not connect. ' . mysql_error()); //exit and print feedback
		}
		$db_selected = mysql_select_db($database); //select database to use

		if (!$db_selected) { //if the database selection failed
			die('Can\'t user database:' . mysql_error()); //exit and print feedback
		}
		
		//echo "SQL SUCCESS";
		?>
	</body>
</html>
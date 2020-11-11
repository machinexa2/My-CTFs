<?php
$dangerous_user_input =  $_GET['data'];
if($dangerous_user_input == ""){
	echo "Use data get parameter<br>";
}
else {
	$password = $_GET['pass'];
	$fp = fopen("encrypted.txt", 'r');
	$fpg = fgets($fp);
	if ($password == trim($fpg)) {
		echo "Access Granted";
		if (preg_match('/\/var\//', $dangerous_user_input)) {
			if (!preg_match('/.*\.\..*/', $dangerous_user_input)) {
				echo @file_get_contents("$dangerous_user_input");
			}
		} else {
			echo "<br>Congratualations admin, you can access /var/";
		}
	} else {	
		if (preg_match('/\/tmp\//', $dangerous_user_input)) {
			echo "Trying to access $dangerous_user_input <br>";
			if (!preg_match('/.*\.\..*/', $dangerous_user_input)) {
				echo @file_get_contents($dangerous_user_input);
			}
		} else {
			echo "<br>Please load articles about hacking from /tmp/ only!<br>";
			echo "<br><img src='index.jpeg'></img>";
			echo "<br>Try harder you fool";
		}
	}	
}
/*
	THIS IS A COMMENT; COMMENTS CAN BE FUNNY AS WELL AS DANGEROUS
	Hey machineyadav, i hid the flag in /var/www/html/flag- Psycho55
 */
?>

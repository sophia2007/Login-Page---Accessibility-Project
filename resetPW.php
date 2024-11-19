<?php
// session start always take place at the beginning
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "user"; // database name

// connection between Form and MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

// email is received from input
$finalEmail = $_POST['resetEmail'];

// compare between user input and database values
$sql = "SELECT * FROM user_table where email = '$finalEmail'";

//SQL result executed
$result = mysql_query($con, $sql);

// if number of rows is greater than 0 there is a username and password, match is found 
// else, match is not
//if (mysqli_num_rows($result)>=1){
	// the message
	//$msg = "Hi \nSecond line o";

	// use wordwrap() if lines are longer than 70 characters
	//$msg = wordwrap($msg,70);

	// send email
	//mail("someone@example.com","My subject",$msg);
//}

mysqli_close($con);
?>
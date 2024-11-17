<?php
// session start always take place at the beginning
session_start();

// connection between Form and MySQL server
$con = mysqli_connect("localhost", "root", "", "user");

// username and password is received from login
$finaluser = trim($_POST['username']);
$finalpass = trim($_POST['password']);

// compare between user input and database values
$sql = "SELECT * FROM user_table where username = '$finaluser' AND password = '$finalpass'";

//SQL result executed
$result = mysql_query($con, $sql);

// if number of rows is greater than 0 there is a username and password, match is found 
// else, match is not
if (mysqli_num_rows($result)>=1){
	//username is stored to session and forwared to next page
	$_SESSION["myuser"]=$finaluser;
	header("Location:newpage.html");
}

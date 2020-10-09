
<?php

$servername = "database-1.cnwakgpixrjm.us-east-1.rds.amazonaws.com";
$username = "ben";
$password = "g4g4s3d";
$dbname = 'z-ben';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "Connected! \n";
}
 
// Attempt select query execution
$makeEmail = $_POST["email"];

$duplicate=mysqli_query($link,"select * from users where email='$makeEmail'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: index.php?message=User name or Email id already exists.");
echo "ERROR!";
}
else{
	
	$sql = "INSERT INTO users (email)
	VALUES ('$makeEmail')";

	if ($link->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}
}
 
// Close connection
mysqli_close($link);
?>
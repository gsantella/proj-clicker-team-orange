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

$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>email</th>";
                echo "<th>clicks</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['clicks'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


//right now this will only work for row 1 but I will add it so any email entered will be found]


$sql = "SELECT clicks FROM users WHERE Id = 1";

$result= mysqli_query($link, $sql);
//converts SQL object into string
$clickNum = mysqli_fetch_row($result);
$clickNum = $clickNum[0];

$clickNum++;


$sql = "UPDATE users SET clicks = $clickNum WHERE Id = 1";

	if ($link->query($sql) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $sql . "<br>" . $link->error;
	}





?>

<!DOCTYPE html>
<head>
    <title>Php database </title>
    <link rel="stylesheet" href="./css/index-style.css">
</head>
    <body>
        <br>
        <form action="database_login.php" method="post">
            <button name="click">Click!</button>

        </form>
        
    </body>
</html>


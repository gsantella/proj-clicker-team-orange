<?php
//Connect
//SQLite3 does not work on REPL

$db = new SQLite3('./database/signinDB.db');
//Run SQL
$results = $db->query("SELECT * FROM signin");
?>
<!DOCTYPE html>
    <head> </head>
    <body>
        <?php
        /*$name = $results->fetchArray(SQLITE3_ASSOC);

        echo "\n";
        echo "Email: " . $name["email"];
        echo "\n"; */
        //needs to be fixed to display increasing number of emails
        for ($i = 0; $i < 2; $i++) {
            echo "\n";
            $name = $results->fetchArray(SQLITE3_ASSOC);

            // After getting the array print out its contents
            echo "Email: " . $name["email"];
            echo "\n";
        }
        ?>
        <br>
        <a href="./index.php"><button name="back"> back </button></a>
    </body>
</html>
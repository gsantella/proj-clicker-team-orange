<?php

    $makeEmail = $_GET["email"];

    $db = new SQLite3('./database/signinDB.db');
    $results = $db->query("SELECT * FROM signin");

    $name1 = $results->fetchArray(SQLITE3_ASSOC);

    print_r($name1["email"]);

    $db->query("INSERT INTO signin (email) VALUES ('$makeEmail')");

    $query = "SELECT username from my_table where username='bob'";
    $result = mysql_query($query);

    if(mysql_num_rows($result) > 0)
    {
        // row exists. do whatever you would like to do.
    }


?>
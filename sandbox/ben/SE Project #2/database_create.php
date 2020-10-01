<?php

    $makeEmail = $_GET["email"];

    $db = new SQLite3('./database/signinDB.db');
    $results = $db->query("SELECT * FROM signin");

    $name1 = $results->fetchArray(SQLITE3_ASSOC);

    print_r($name1["email"]);

    $db->query("INSERT INTO signin (email) VALUES ('$makeEmail')");
?>
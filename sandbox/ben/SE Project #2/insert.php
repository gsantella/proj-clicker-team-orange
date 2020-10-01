<?php

$db = new SQLite3('signinDB.db');

$y = $_POST["email"];

$db->query("INSERT INTO signin (email)VALUES ('$y')");
 
?>
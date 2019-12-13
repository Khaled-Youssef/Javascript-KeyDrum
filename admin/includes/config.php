<?php
$servername = "localhost";
$username = "root";
$password = "";
$databsename = "cms";
$scriptLink = "http://localhost/cms-course/";
try {
    $dbConnection  = new PDO("mysql:host=$servername;dbname=$databsename", $username, $password);
    // set the PDO error mode to exception
    $dbConnection ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

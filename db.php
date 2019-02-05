<?php
$DSN        = "mysql:host=localhost; dbname=ooplogin";
$username   = "root";
$password   = "";

$options = array(PDO::ATTR_PERSISTENT === true);

try {
    $con = new PDO($DSN, $username, $password, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "database connection established";
} catch (PDOException $ex) {
    echo "database connection error is : ".$ex->getMessage();
}

?>
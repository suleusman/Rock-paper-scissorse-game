
<?php

$DB_USER = "root";
$DB_PSWD = "";
$DB_HOST = "localhost";
$DB_NAME = "score_test";

$dbcon = mysqli_connect($DB_HOST, $DB_USER, $DB_PSWD, $DB_NAME);


if (!$dbcon){
	die("Connection failed:" .mysqli_connect_error());
}


?>

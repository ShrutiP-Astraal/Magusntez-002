
<?php

$db_host = 'localhost';

//on developers local servers
$db_name = 'magusnetz_db';
$db_user = 'root';
$db_pass = '';

//on production server
//$db_name = 'prgeeq';
//$db_user = 'adminkk';
//$db_pass = 'kk@123@321';



$db_driver = 'mysql';
$coni=mysqli_connect("$db_host","$db_user","$db_pass","$db_name") or die('Requested Database is not available!');




?>
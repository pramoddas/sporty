<?php
ini_set("error_reporting", "on");
error_reporting(E_ALL);


require_once 'vendor/autoload.php';

use Sportsy\models\Database;

$db = new Database();
$result = $db->connect();

// while ($row = mysql_fetch_array($result)) {
//    // echo "ID:".$row{'id'}."NAME:".$row{'full_name'}."<br>";
// 	   echo "ID:".$row{'trainer_id'}."<br>";

// }
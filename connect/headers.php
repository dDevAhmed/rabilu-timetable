<?php
$server="localhost";
$username="root";
$password="";
$dbname="timetable";

$db= new mysqli($server, $username, $password, $dbname);
if($db->connect_error) {
die("Database connection problem");
}

?>
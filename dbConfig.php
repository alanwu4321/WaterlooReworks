<?php
//Development
// $dbhost = '127.0.0.1:3306';
// $dbuser = 'root';
// $dbpassword = '';
// $dbname = 'ac2wu';

// Production
$dbhost = 'localhost';
$dbuser = 'ac2wu';
$dbpassword = 'X98077s007007$$$';
$dbname = 'ac2wu';

// (2) mysqli connection variable
$mysqli = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if ($mysqli->connect_errno) 
{
echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}
// echo '<p>' . $mysqli->host_info . '</p>';

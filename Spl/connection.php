<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "abyz9250";
$dbname = "healuspl_db";

if(!$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}


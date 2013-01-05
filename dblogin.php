<?php
$host='localhost';
$user='postgres';
$password='';
$db='vvs';

$conn=pg_connect("host=localhost user=postgres password=sakthi dbname=vvs")
	or die("could not connect to server\n");
?>

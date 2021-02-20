<?php 

 // Connect to Database //

try{

	$dsn = 'mysql:host=localhost;dbname=auth_php';
	
	$pdo = new PDO($dsn, "root", "");

} catch(Exception $e){
	echo 'error is ' , $e->getMessage();
	die();
}
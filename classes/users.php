<?php
include './inc/db.php';


class user
{
 

	 public static function getalluser()
	 {
	 	global $pdo;
	 	$stmt = $pdo->prepare("SELECT * FROM users");
	    $stmt->execute();
	    $stmt = $stmt->fetchAll(PDO::FETCH_CLASS);
	    return $stmt;
	 }

}
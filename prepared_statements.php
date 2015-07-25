<?php 
require 'connect.php';


$name = "Chaima";
$message = "best of";


// Method #1

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, now())";

// prepare statements
$query = $handler->prepare($sql);
//execute query
$query->execute(array(

	':name' => $name,
	':message' => $message

	));

// Method #2

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (?, ?, now())";

// prepare statements
$query = $handler->prepare($sql);
//execute query
$query->execute(array($name, $message));
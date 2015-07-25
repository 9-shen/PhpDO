<?php 
require 'connect.php';

$name = "Kawtar";
$message = "Lovely Sist";
$sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, now())";

// prepare statements
$query = $handler->prepare($sql);
//execute query
$query->execute(array(

	':name' => $name,
	':message' => $message

	));

	echo $handler->lastInsertId();
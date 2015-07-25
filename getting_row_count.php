<?php 
require 'connect.php';


$query = $handler->query('SELECT * FROM guestbook');
if ($query->rowCount()) {
	//echo $query->rowCount();
	while ($r = $query->fetch(PDO::FETCH_OBJ)) {
		echo $r->message, '<br>';
	}
}else{
	echo 'No Result';
}
<?php 
require 'connect.php';

$query = $handler->query('SELECT * FROM guestbook'); 

// fetch data 
$r = $query->fetch();
echo $r['name'], '<br>';

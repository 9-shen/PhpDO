<?php 
require 'connect.php';

$query = $handler->query('SELECT * FROM guestbook'); 
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 print_r($result);


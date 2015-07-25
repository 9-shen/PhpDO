<?php 
require 'connect.php';

$query = $handler->query('SELECT * FROM guestbook');

// You Should be Using one of those !

// Fetch Both 

$r = $query->fetch(PDO::FETCH_BOTH);
echo '<pre>', print_r($r), '</pre>';

// Or Numric

$r = $query->fetch(PDO::FETCH_NUM);
echo '<pre>', print_r($r), '</pre>';

// Or Associative

$r = $query->fetch(PDO::FETCH_ASSOC);
echo '<pre>', print_r($r), '</pre>';


// Or  Fetch Objects

while($r = $query->fetch(PDO::FETCH_OBJ)){

echo $r->message, '<br>';
}
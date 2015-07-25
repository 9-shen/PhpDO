<?php 
require 'connect.php';

class GuestbookEntry{
	public $id, $name, $message, $posted,
	       $entry;
	       public function __construct(){
	       	$this->entry = "{$this->name} Posted: {$this->message}";
	       }
}
$query = $handler->query('SELECT * FROM guestbook');
$query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');
while ($r = $query->fetch()) {
	echo $r->entry, '<br>';
}
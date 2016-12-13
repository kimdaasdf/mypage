<?php
  $database = new mysqli('localhost', 'root', '3560', 'testdb');

  if($database->connect_error) {
  	die('DB Error 관리자에게 문의 하십시오.');
  }

  $database->set_charset('utf8');

 ?>
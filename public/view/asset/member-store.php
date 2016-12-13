<?php

require_once('../data-model/config.php');

$name = $_POST['member_name'];
$email = $_POST['member_email'];
$password = $_POST['member_pass'];
$pass_ok = $POST['member_pass_ok'];
$birthday = $POST['member_birthday'];
$nickname = $POST['member_nickname'];
$level = 'U';

$password = md5($password);

$query = "INSERT INTO users (user_email, user_pass, birthday, user_level) VALUES('$name', '$email', '$password', '$nickname', '$level')";

mysqli_query($query) OR die (mysqli_error());

?>
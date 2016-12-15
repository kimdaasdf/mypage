<?php

require_once('../../data-model/config.php');

$name = $_POST['member_name'];
$email = $_POST['member_email'];
$password = $_POST['member_pass'];
$pass_ok = $_POST['member_pass_ok'];
$birthday = $_POST['member_birthday'];
$nickname = $_POST['member_nickname'];

$password = md5($password);

$query = "INSERT INTO users (user_name, user_email, user_pass, birthday, user_nickname) VALUES ('$name', '$email', '$password', '$birthday', '$nickname')";

mysqli_query($query) OR die (mysqli_error());

mysqli_close($database);

?>
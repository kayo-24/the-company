<?php

require "../classes/User.php";

$username = $_POST['username'];
$password = $_POST['password'];

$u = new User;
$u->login($username, $password);
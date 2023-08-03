<?php

require "../classes/User.php";

$f_name = $_POST['first_name'];
$l_name = $_POST['last_name'];
$u_name = $_POST['username'];
$password = $_POST['password'];

$u = new User;
$u->createUser($f_name, $l_name, $u_name, $password);
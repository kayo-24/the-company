<?php

session_start();
require "../classes/User.php";

$file_name = $_FILES['avatar']['name'];
$tmp_name = $_FILES['avatar']['tmp_name']; //temporary location of uploaded file
$user_id = $_SESSION['user_id'];

$u = new User;
$u->updatePhoto($user_id, $file_name, $tmp_name);
<?php

require "../classes/User.php";

$id = $_GET['user_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];

$u = new User;
$u->updateUser($id, $first_name, $last_name, $username);
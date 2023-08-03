<?php

require "../classes/User.php";

$user_id = $_POST['user_id'];

$u = new User;
$u->deleteUser($user_id);
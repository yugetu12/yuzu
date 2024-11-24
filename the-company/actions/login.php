<?php
include "../classes/User.php";

$user = new User;
$user->login($_POST);

?>
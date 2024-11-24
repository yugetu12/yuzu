<?php
include "../classes/User.php";

$user = new User;       //Create an object
$user->store($_POST);   //Call the method

?>
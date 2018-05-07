<?php
$forename=$_POST['forename'];
$surname=$_POST['surname'];
$gender=$_POST['gender'];
$power=$_POST['power'];
echo "Hello {$forename} {$surname}!<br>You are a {$gender} with the {$power} superpower!!";
?>
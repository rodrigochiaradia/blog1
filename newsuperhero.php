<?php
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>
<label>Forename:</label><input type=\"text\" name=\"forename\"><br>
<label>Surname:</label><input type=\"text\" name=\"surname\"><br>
<label>Gender:</label><input type=\"text\" name=\"gender\"><br>
<label>Main superhero power:</label><input type=\"text\" name=\"power\"><br>
<input type=\"submit\" value=\"Submit\">
</form>";
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $forename=$_POST['forename'];
    $surname=$_POST['surname'];
    $gender=$_POST['gender'];
    $power=$_POST['power'];
    echo "Hello {$forename} {$surname}!<br>You are a {$gender} with the {$power} superpower!!";
}
else{
    echo "impossible!";
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo "<form action='".$_SERVER['PHP_SELF']."' method='post'>
<label>Forename:</label><br>
<input type='text' name='forename'><br>
<label>Surname:</label><br>
<input type='text' name='surname'><br>
<input type='submit'>
</form>";
}
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // execute if requested using HTTP POST Method
    $forename = $_POST["forename"];
    $surname = $_POST["surname"];
    echo "<h1>Hello {$forename} {$surname}</h1>";
}
else {
    echo "this is impossible";
// this is impossible
}
?>
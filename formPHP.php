<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Selector</title>
    <link rel="stylesheet" href="Assets/style.css" type="text/css">
</head>
<body>
<!--HEADER START-->
<header>
    <h2>Please enter the details of your superhero</h2>
</header>
<!--HEADER END-->
<!--MAIN START-->
<main>
    <form action="formResponse.php" method="post">
        <label>Forename:</label><input type="text" name="forename"><br>
        <label>Surname:</label><input type="text" name="surname"><br>
        <label>Gender:</label><input type="text" name="gender"><br>
        <label>Main superhero power:</label><input type="text" name="power"><br>
        <input type="submit" value="Submit">
    </form>
</main>
<!--MAIN END-->
<!--FOOTER START-->
<footer>
    <h6>Este site foi desenvolvido para apoiar famílias que planejam uma jornada fora do Brasil com
        seus filhos pequenos!</h6>
</footer>
<!--FOOTER END-->
</body>
</html>
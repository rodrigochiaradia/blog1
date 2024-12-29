<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog da Flavia! Escolha do planeta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!--HEADER START-->
  <header>
    <h1>Here is a webpage containing php</h1>
  </header>
  <!--HEADER END-->
  <!--MAIN START-->
  <main>
    <?php
    $planet = $_GET['planet'];
    echo "
          <h1>Hello {$planet}</h1>";

    $x = 25;
    $y = 10;
    $z = $x + $y;
    echo "
          <h3>Variable x is set as {$x}</h3>
          <h3>Variable y is set as {$y}</h3>
          <h2><b>x + y is {$z}</b></h2>";
    ?>
  </main>
  <!--MAIN END-->
  <!--FOOTER START-->
  <footer>
    <h6>Este site foi desenvolvido para apoiar famílias que planejam uma jornada fora do Brasil com
      seus filhos pequenos!</h6>
  </footer>
  <!--FOOTER END-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
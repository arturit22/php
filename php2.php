<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/55aad314c9.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    /*
    artur golubevs
    ülesanne 2
    01.02.24
    */
    $x = 1;
    $c = 2;
    $liitm = $x + $c;
    $lahutm = $x - $c;
    $korrut = $x * $c;
    $jagam = $x / $c;
    $jaak = $x % $c;
    printf("%d + %d = %d", $x, $c, $liitm);
    printf("<br>"."%d - %d = %d", $x, $c, $lahutm);
    printf("<br>"."%d * %d = %d", $x, $c, $korrut);
    printf("<br>"."%d / %d = %d", $x, $c, $jagam);
    printf("<br>"."%d / %d = %d", $x, $c, $jaak);
    
    
    $mm = 1700;
    $cm = $mm / 10;
    $m = $mm /1000;
    
    printf( "<br>"."%d mm = %.2f cm", $mm, $cm);
    printf("<br>"."%d mm = %.2f m", $mm, $m);

    $a = 3;
    $b = 4;
    $c = 5;
    $p = $a+$b+$c;
    $s = ($a * $b) / 2;
    printf( "<br>"."Kolmnurga ümbermõõt ja pindala on %d ja %d ", $s, $p);
    ?>
</body>
</html>
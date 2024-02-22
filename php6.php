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
    //Genereeri
    echo "<br>";
    echo "1.Ulesanne";
    echo "<br>";
    for ($i = 1; $i <= 100; $i++) {
        echo $i . ". ";
        if ($i % 10 === 0) {
            echo "<br>";
        }
    }
    

    //tärnidest horisontaalne rida
    echo "<br>";
    echo "2.Ulesanne";
    echo "<br>";
    for ($i = 1; $i <= 100; $i++) {
        echo "*";
    }


    //tärnidest vertikaalne rida
    echo "<br>";
    echo "3.Ulesanne";
    echo "<br>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<br>","*";
    }
    ?>

    <form action="php6.php" method="get" >
        ruudu küljed <input type="text" style="margin-top: 100px;" name="p1"><br>
        <input type="submit" value="Saada">
    </form>

    <?php
    //ruut
    
    $st1 = isset($_GET['p1']) ? $_GET['p1'] : null;
    if (isset($_GET['p1']) && $_GET['p1'] > 0) {
        $size = $_GET['p1'];
        
        // Loome ruudu
        echo "<br>";
        echo "4.Ulesanne";
        echo "<br>";
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                echo "* ";
            }
            echo "<br>";
        }
    }


    //kahanev
    echo "<br>";
    echo "5.Ulesanne", "<br>";
    echo "<br>";
    for ($i = 10; $i >= 1; $i--) {
        if ($i % 2 == 0) {
            echo $i . "<br>";
        }
    }
    echo "<br>";
    echo "6. ulesanne", "<br>";
    echo "<br>";
    //kolmega jagunevad
    for ($i = 1; $i <= 100; $i++) {
        if ($i%3== 0) {
            echo $i ."<br>";
        }
    }

    //massiivid ja tsüklid
    echo "<br>";
    echo "7.Ulesanne";
    echo "<br>";
    $tudrukud = array("maria", "anna", "laura", "kati");
    $poisid = array("jaan", "mart", "andres", "peeter");

    for ($i = 0; $i < count($tudrukud); $i++) {
        echo $poisid[$i] . "," . $tudrukud[$i] . "<br>";
    }
    ?>
</body>
</html>
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
    // Tervitus
    function tervita(){
        return "Tere päiksekesekene!";
    }
    echo tervita();
    ?>

    <?php
        function uudiskiri() {
    ?>
        <form action="php7.php" method="get" class="form-inline">
            <div class="form-group mr-2">
                <input type="email" class="form-control" name="email" placeholder="Sisesta oma e-posti aadress">
            </div>
            <button type="submit" class="btn btn-primary">Liitu uudiskirjaga</button>
        </form>
    <?php
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    uudiskiri();
    ?>
    <br>
    <form action="php7.php" method="get" class="form-inline">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="t1" placeholder="kasutajanimi"><br>
        </div>
        <button type="submit" class="btn btn-primary">kasutajanimi</button>
        
    </form>

    <?php
    // Kasutajanimi ja email
    $st1 = isset($_GET['t1']) ? $_GET['t1'] : null;
    
    function kasutaja($kasutajanimi){
        $kasutajanimi = strtolower($kasutajanimi);
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $code = '';
        for ($i = 0; $i < 7; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $code .= $characters[$index];
        }
        return $kasutajanimi . "@hkhk.edu.ee" . "<br>" ."teie kood: ".$code;
    }
    
    echo kasutaja($st1);
    ?>

    <form action="php7.php" method="get" class="form-inline">
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="t1" placeholder="1 arv"><br>
        </div>
        <div class="form-group mr-2">
            <input type="text" class="form-control" name="t2" placeholder="2 arv"><br>
        </div>
        <button type="submit" class="btn btn-primary">arvud</button>
        
    </form>

    <?php
    //arvud
    function arvud(){

    }

    ?>
</body>
</html>

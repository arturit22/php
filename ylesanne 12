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
    
<form action="php12.php" method="get" class="form-inline">
        <div class="form-group mr-2">
            <input type="time" class="form-control" name="t1" placeholder="stardiaeg (hh:mm)"><br>
        </div>
        <div class="form-group mr-2">
            <input type="time" class="form-control" name="t2" placeholder="loppaeg (hh:mm)"><br>
        </div>
        <button type="submit" class="btn btn-primary">arvuta</button>
</form>

<?php

function reisiaeg($algusaeg, $loppaeg) {
    //sisendi kontroll
    if(strlen($algusaeg) < 5 || strlen($loppaeg) < 5) {
        echo "sisestatud ajad peavad olema vähemalt viis sümbolit pikad.";
        return;
    }

    //eraldame sisendi stringist
    $aeg1 = explode(":", $algusaeg);
    $aeg2 = explode(":", $loppaeg);

    //soiduaeg
    $startminut = $aeg1[0] * 60 + $aeg1[1];
    $loppminut = $aeg2[0] * 60 + $aeg2[1];

    $reisiaeg = $loppminut - $startminut;

    //tunnid ja minutid
    $tunnid = floor($reisiaeg / 60);
    $minutes = $reisiaeg % 60;

    return array('hours' => $tunnid, 'minutes' => $minutes);
}

//kasutaja sisestatud info
$algusaeg = isset($_GET['t1']) ? $_GET['t1'] : '';
$loppaeg = isset($_GET['t2']) ? $_GET['t2'] : '';

//soiduaja arvutamine
if (!empty($algusaeg) && !empty($loppaeg)) {
    $result = reisiaeg($algusaeg, $loppaeg);

    //väljastamine
    if ($result) {
        echo "soiduaeg: " . $result['hours'] . " tundi ja " . $result['minutes'] . " minutit";
    }
}
?>


</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvaline pilt</title>
</head>
<body>
<?php
//suvaline pilt
$kataloog = 'img/';
$pildid = glob($kataloog . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if (!empty($pildid)) {
    $suvaline_pilt = $pildid[array_rand($pildid)];
    echo '<img src="' . $suvaline_pilt . '" alt="suvaline pilt"><br><br>';
} else {
    echo 'Kataloogis pole ühtegi pilti.<br><br>';
}
?>
<div style="display: flex;">
    <?php
    //pisipildid kolmes veerus
    $laius = 120;
    $korgus = 90;
    for ($i = 0; $i < 3; $i++) {
        echo '<div style="flex: 1;">';
        if (!empty($pildid)) {
            $suvaline_pilt = $pildid[array_rand($pildid)];
            echo '<img width="' . $laius . '" height="' . $korgus . '" src="' . $suvaline_pilt . '" alt="pisipilt">';
        } else {
            echo 'Kataloogis pole ühtegi pilti.';
        }
        echo '</div>';
    }
    ?>
</div>
</body>
</html>

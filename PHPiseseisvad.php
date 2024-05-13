<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lihtne tekst</h1>
    <?php
    // Lihtne tekst
    $lihtne_tekst = "Juhan Liiv, \"Ääremärkused\"";
    echo $lihtne_tekst;
    ?>
    <br>
    <br>
    <h1>Intress</h1>
    <?php
    // Intress
    $raha = 2000;
    $yks_raha = $raha / 100;
    $kokku = $yks_raha * 2 * 5;
    echo "Summa viie aasta pärast on: $kokku";
    ?>
    <br>
    <br>
    <h1>Loend</h1>
    <?php
    // Loend
    $arv = 10;
    while ($arv >= 1) {
        echo $arv . '<br>';
        $arv--;
    }
    ?>
    <br>
    <br>
    <h1>Kivi-paber-käärid</h1>
    <?php
    function arvuti() {
        $valikud = ["kivi", "paber", "käärid"];
        $arvuti = array_rand($valikud);
        return $valikud[$arvuti];
    }

    function voit($kasutaja, $arvuti) {
        if ($kasutaja == $arvuti) {
            return "viik";
        } elseif (($kasutaja == 'kivi' && $arvuti == 'käärid') || 
                  ($kasutaja == 'paber' && $arvuti == 'kivi') || 
                  ($kasutaja == 'käärid' && $arvuti == 'paber')) {
            return "kasutaja võidab";
        } else {
            return "arvuti võidab";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kasutaja = $_POST['valik'];
        $arvuti = arvuti();
        $tulemus = voit($kasutaja, $arvuti);
        echo "kasutaja valik: $kasutaja<br>";
        echo "arvuti valik: $arvuti<br>";
        echo "tulemus: $tulemus";
    }
    ?>
    <h2>Vali oma käik:</h2>
    <form method="post">
        <input type="radio" name="valik" value="kivi" checked> kivi <br>
        <input type="radio" name="valik" value="paber"> paber <br>
        <input type="radio" name="valik" value="käärid"> käärid <br><br>
        <input type="submit" value="esita">
    </form>
</body>
</html>

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
if(!empty($_FILES['minu_fail']['name'])){
    $sinu_faili_nimi = $_FILES['minu_fail']['name'];
    $ajutine_fail = $_FILES['minu_fail']['tmp_name'];
    $faili_tyyp = $_FILES['minu_fail']['type']; 

    $kataloog = "failid";
    if($faili_tyyp == "image/jpeg") {
        if(move_uploaded_file($ajutine_fail, $kataloog . "/" . $sinu_faili_nimi)){
            echo "faili üleslaadimine oli edukas";
            echo '<img src="' . $kataloog . '/' . $sinu_faili_nimi . '" alt="Minu pilt">';
        } else {
            echo "faili üleslaadimine ebaõnnestus";
        }
    } else {
        echo "faili tüüp ei ole lubatud";
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">
</form>
</body>
</html>

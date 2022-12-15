<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi : String</title>
</head>
<body>
    <h2>Fungsi : String substr</h2>
    <?php
    $string="pemrograman web PHP";
    $word=substr($string,16,3);
    echo("<l>\"$string\"</l><br>");
    echo("Hasil Substr (15,3)adalah $word");
    ?>
    
</body>
</html>
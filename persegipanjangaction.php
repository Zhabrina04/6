<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi panjang</title>
</head>
<body>
<?php
    $panjang=$_POST['panjang'];
    $lebar=$_POST['lebar'];
    // CONTOH
    $luas= $panjang * $lebar;
    $keliling= 2 * ($panjang * $lebar);
    ?>

<a href="indexx.php">Home</a>
    <h1>persegi panjang</h1>
    <h4>Luas = panjang x lebar = <?php echo $luas;?></h4>
    <h4>keliling = 2 x panjang x lebar= <?php echo $keliling;?></h4>
    <img src="persegipanjang3.png" widht="200" height="200" alt="">
</body>
</html>
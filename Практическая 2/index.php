<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=devic width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Практическая 1</h1>
    <h2>Формула 1</h2>
    <?php
    $a = 2;
    $b=5;
    $c=1;
    $d=8;
    $res = ($a / $c) * ($b / $d) - ($a * $b - $c) / ($c * $d);
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";
    echo "d = $d<br>";
    echo "Результат  = $res";
    ?>
    <h2>Формула 2</h2>
    <?php
    $x=2;
    $y=4;
    echo "x = $x<br>";
    echo "y = $y<br>";
    $res2=($x+$y)/($y+1)-($x*$y-12)/(34+$x);
    echo "Результат = $res2";
    ?>
    <h2>Формула 3</h2>
    <?php
    $x = 2;
    $y = 3;
    echo "x = $x<br>";
    echo "y = $y<br>";
    $res3 = (($x+1)/ ($x - 1)) ** $x + 18 * $x * ($y ** 2);
    echo "Результат = $res3";
    ?>
    <h2>Формула 4</h2>
    <?php
    echo "x = $x<br>";
    echo "y = $y<br>";
    $res2 = (1 + 1 / ($x ** 2)) ** $x - 12 * ($x ** 2) * $y;
    echo "Результат = $res2<br?";
    ?>
</body>
</html>
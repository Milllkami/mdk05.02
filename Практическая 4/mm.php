<h1>Практическая 4</h1>
<h2>Задание 1</h2>
<?php
$max = $num[0];
foreach ($num as $key => $value) {
    if($value > $max) {
        $max = $value;
    }
}
echo "Максимум - $max";
?>
<h2>Задание 2</h2>
<?php
$array = [12, 5, 422, 7, 2];
$sum = 0;
$product = 1;

?>
<h2>Задание 3</h2>
<?php
$array = [12, 5, 422, 7, 2];
$sum = 0;
for($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
}
$average = $sum / count($array);
echo "Среднее арифметическое: $average <br>";
?>
<h2>Задание 4</h2>
<?php
$source = [2.5, -4.2, 3.1, -1.5];
$result = [];
foreach ($source as $value) {
    if($value >= 0) {
        $result[] = $value *$value;
    } else {
        $result[] = abs($value); 
    }    
}
foreach($result as $key => $val) {
    echo "$key - $val <br>";
}
?>
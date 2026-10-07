<h1>Практическая 3 - циклы</h1>
<h2>Задача 1</h2>
<?php
$startnumber = 2; // начальное число
$multiplier = 3; // множитель
$quantility = 5; // количество чисел
echo "Стартовое значение = " . $startnumber . "<br>";
echo "Множитель = " . $multiplier . "<br>";
echo "Количество чисел = " . $quantility . "<br>";
echo "Результат: ";
$num = $startnumber;
for ($i = 0; $i < 5; $i++) {
    echo $num . " ";
    $num = $num * 3; // умножить на 3 для следущего шага
}
?>
<h2>Задача 2</h2>
<?php
$lastNumber = 10; //числло n 
$sum = 0;
for ($i =1; $i <= $lastNumber; $i++) {
    $sum += $i; // прибавить текущее число к сумме
} 
echo "Число n = " . $lastNumber . "<br>";
echo "Сумма всех чисел = " . $sum;
?>
<h2>Задача 3</h2>
<?php
$lastNumber = 10; // число n
$multiplicationResult = 1;
for ($i =1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) { //проверить на четность
    $multiplicationResult *= $i;
    } 
}
echo "Число n = " . $lastNumber . "<br>";
echo "Произведение четных чисел = " . $multiplicationResult;
?>
<h2>Задача 4</h2>
<?php
$day = 7; // количество дней n
$currentDistance = 10; // 1-й день
$totalDistance = 0;
for ($i = 1; $i <= $day; $i++) {
    $totalDistance += $currentDistance;
    $currentDistance *= 1.10; // увеличение на 10%
}
echo "Количество дней = " . $day . "<br>";
echo "Суммарный путь = " . round($totalDistance, 2) . " км";
?>
<h2>Задача 5</h2>
<?php
echo "Всего лапа 64 <br><br>"; 
// максимум 16 кроликов, так как 16 * 4 = 64 лапы
for ($rabbits = 0; $rabbits <= 16; $rabbits++) {
    $rabbitsLegs = $rabbits * 4;
    $remainingLegs = 64 - $rabbitsLegs;
    $geese = $remainingLegs / 2;
    echo "Сочетание: Кроликов - <br>" . $rabbits . "</b>, Гусей - <b>" . $geese . "</b><br>";
}
?>
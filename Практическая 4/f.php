<h1>Практическая 4</h1>
<h2>Задание 1</h2>
<?php 
$words = ['monday' => 'понедельник', 'tuesday' => 'вторник', 'wednesday' => 'среда', 'thursday' => 'четверг', 
'friday' => 'пятница', 'saturday' => 'суббота', 'sunday' => 'воскресенье', 'cat' => 'кошка', 'dog' => 'собака', 'lime' => 'лайм'];
foreach ($words as $eng => $rus) {
    echo $eng . ' - ' . $rus . '<br>';
}
?>
<h2>Задание 2</h2>
<?php 
$search1 = 'один'; // какое русское слово переводим
$found1 = false;
foreach ($words as $eng => $rus) {
    if ($rus == $search1) {
        echo $search1 . ' - ' . $eng . '<br>';
        $found1 = true;
        break; // нашли слово - вывов из цикла
    }
}
if ($found1 == false) {
    echo $search1 . " - в словаре нет такого слова <br>";
}
?>
<h2>Задание 3</h2>
<?php 
$search2 = 'cat';
$found2 = true;
foreach ($words as $eng => $rus) {// если английское слово:
   if ($eng == $search2) {
    echo $search2 . ' - '. $rus . '<br>';
    $found2 = true;
    break;
   } // если русское слово:
   if ($rus == $search2) {
    echo $search2 . ' - ' . $eng . '<br>';
    $found2 = true;
    break;
   }
}  
if ($found2 == false) {
    echo $search2 . 'В словаре нет такого слова <br>';
}
?>
<h2>Задание 5</h2>
<?php
$str = 'banana'; 
?>
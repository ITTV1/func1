<?php

//Локальные переменные
$z = 1000; // глобальная переменная, равная 1000
function lol($z)
{
    echo $z; // выводим значение параметра $z
// Параметр $z не имеет к глобальной переменной $z никакого отношения!
    $z++;
// изменяется локальная копия значения, переданного в $z
}
lol(1);

// выводит 1
echo $z."<br/>";
// выводит 1000 - глобальная переменная $z не изменилась
?>



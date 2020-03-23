<?php
## Типы аргументов и возвращаемого значения в функции
//string float  bool int
  function summ(int $first, int $second) : int
  {
    return $first + $second;
  }
  echo summ(4, 4)."<br/>";
  echo summ(4.5, 4.5); // Fatal Error в PHP < 7, Exception TypeError в PHP >=7
?>

<?php

## Строгая типизация в коде
  declare(strict_types = 1);
  function summ($first, $second) : int
  {
    return $first + $second;
  }
  echo summ(4, 4); // 4
  echo summ(4.5, 4.5); // Fatal Error в PHP < 7, Exception TypeError в PHP >=7  TypeError
?>

<?php
# Использование статических переменных в php
  function self1()
  {
    static $count = 0;
    $count++;
    echo $count;
  }
  for ($i = 0; $i < 10; $i++) self1();
?>

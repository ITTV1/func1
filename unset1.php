<?php
//Как работает инструкция global

## Особенность инструкции global.
  $b = 11;
  function html()
  { 
    global $b;
    unset($b);
  }
  html();
  echo $b;  // выводит 11, настоящая $b не была удалена в html()!
//
  function del() { unset($GLOBALS['c']); }
  $c = 101;
  del();
  echo $c; // Предупреждение: переменная $C не определена!

?>

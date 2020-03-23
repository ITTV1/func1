<?php
//
//function html()
//{
//    global $b;
//    $b = 11;
//}
//
//html();
//echo $b;
function html()
{
    $b = &$GLOBALS['b'];
    $b = 12;
}
html();
echo $b;
?>



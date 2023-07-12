<?php
function exclaim($str)
{
    return $str . "!";
}
function ask($str)
{
    return $str . "?";
}
function printText($str, $format)
{
    echo $format($str);
}

printText("Hello Team", "exclaim");
echo "<br>";
printText("Helo Team", "ask");

echo "<br>";
$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map(function ($item) {
    return strlen($item);
}, $strings);
print_r($lengths);

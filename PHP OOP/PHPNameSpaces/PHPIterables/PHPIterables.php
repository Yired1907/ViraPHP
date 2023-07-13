<?php
function printIterable(iterable $myIterable)
{
    foreach ($myIterable as $item) {
        echo $item;
    }
}

$arr = ["x", "y", "z"];
printIterable(($arr));

echo "<br>";

function getIterable2(): iterable
{
    return ["a", "b", "c"];
}

$myIterable = getIterable2();
foreach ($myIterable as $item) {
    echo $item;
}

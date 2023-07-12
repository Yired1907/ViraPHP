<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
</head>

<body>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");

    echo "br";
    ?>

    &copy; 2010-<?php echo date("Y") . "<br>"; ?>

    <?php
    echo "The time is " . date("h:i:sa") . "<br>";
    ?>

    <?php
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa") . "<br>";
    ?>

    <!-- mktime(hour, minute, second, month, day, year) -->
    <?php $d = mktime(11, 14, 54, 8, 12, 2023);
    echo "Created date is " . date("d-m-Y h:i:sa", $d) . "<br>";
    ?>

    <!-- strtotime(time, now) -->
    <?php
    $d = strtotime("10:30pm April 15 2023");
    echo "Created date is " . date("d-m-Y h:i:sa", $d) . "<br>";
    ?>

    <?php
    $d = strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    ?>

    <?php
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 week", $startdate);
    }
    ?>

    <?php
    $d1 = strtotime("July 04");
    $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
    echo "There are " . $d2 . " days until 4th of July.";
    ?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JSON</title>
</head>

<body>
    <?php
    $name = array("Qui" => 24, "Truong" => 22, "Phuc" => 23);
    echo json_encode($name);

    echo "<br>";

    $name = '{"Qui":24,"Truong":22,"Phuc":23}';
    var_dump(json_decode($name));

    echo "<br>";

    $name = '{"Qui":24,"Truong":22,"Phuc":23}';
    $arr = json_decode($name, true);

    echo $arr["Qui"];
    echo $arr["Truong"];
    echo $arr["Phuc"];

    echo "<br>";

    $name = '{"Qui":24,"Truong":22,"Phuc":23}';

    $arr = json_decode($name, true);

    foreach ($arr as $key => $value) {
        echo $key . " => " . $value . "<br>";
    }

    echo "<br>";
    $name = '{"Qui":24,"Truong":22,"Phúc":23}';
    $tx = json_decode($name);

    foreach ($tx as $key => $value) {
        echo $key . "=>" . $value . "</br>";
    }
    ?>
</body>

</html>
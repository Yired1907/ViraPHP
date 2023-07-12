<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Include</title>
</head>

<body>
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>
    <h1>Welcome to my home page!</h1>

    <?php include 'vars.php';
    echo "I have a $color $car.";
    ?>


    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php'; ?>




    <!-- <?php include 'noFileExists.php';
            echo "I have a $color $car.";
            ?> -->

    <!-- <?php require 'noFileExists.php';
            echo "I have a $color $car.";
            ?> -->
</body>

</html>
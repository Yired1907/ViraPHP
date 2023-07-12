<!DOCTYPE html>
<html lang="en">
<header></header>

<body>
    <h2>PHP</h2>
    <h3>
        <?php
        $txt = "VIRA";
        echo "Hello $txt <br>";


        echo "Hello World!<br>";
        echo "Hello World!<br>";
        echo "Hello World!<br>";

        //Nhận xét
        #nhãn xét

        //Variable
        //PHP Echo/In

        $name = "Qui";
        $a = 1;
        $b = 2;

        echo "My name's $name <br>";
        echo "$a + $b =", $a + $b, "<br>";


        // -------------------------------------------------------------------
        //PHP Data Type
        echo "----------------PHP DATA TYPE-------------------------<br><br>";
        $c = 1907;
        $d = 20.36;
        var_dump($c);
        var_dump($d);

        echo "<br>";

        class iphone
        {
            public $color;
            public $model;

            public function __construct($color, $model)
            {
                $this->color = $color;
                $this->color = $model;
            }

            public function message()
            {
                return 'This is ' . $this->color . " " . $this->model . "!";
            }
        }

        $Phone = new iphone('red', 'Samsung');
        echo $Phone->message(), "<br>";

        $Phone2 = new iphone('pink', 'Apple');
        echo $Phone2->message();

        echo "<br>";

        $x = "Hello world!";
        $x = null;
        var_dump($x);

        echo "<br><br>";
        echo "-------------------------PHP String--------------------<br>";

        //PHP String
        echo ("Hello! My name's Qui <br>");
        echo strlen("Hello! My name's Qui"), "<br>"; //outputs 20
        echo str_word_count("Hello! My name's Qui"), "<br>"; //outputs 4
        echo strrev("Hello! My name's Qui"), "<br>"; // đảo ngược chữ
        echo strpos("Hello! My name's Qui", ("name")), "<br>";

        echo str_replace("Qui", "Yired", "Hello! My name's Qui");

        echo "<br><br>";
        echo "-------------------------PHP Numbers--------------------<br>";
        //PHP Numbers
        $f = 1907;
        echo "1907: ";
        var_dump(is_int($f));
        echo "<br>";

        $f = 19.07;
        echo "19.07: ";
        var_dump(is_int($f));

        echo " Check if the type of a variable is float: ";
        var_dump(is_float($f));

        $x = 202.78;
        echo "<br> Check ($x) if a numeric value is finite or infinite: ";
        var_dump(is_float($x));

        echo "<br>";
        // Invalid calculation will return a NaN value
        $x = acos(8);
        var_dump($x);

        echo "<br> Check if the variable is numeric (1907): <br>";

        $x = 1907;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "1907";
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "19.07" + 100;
        var_dump(is_numeric($x));

        echo "<br>";

        $x = "Hello bro";
        var_dump(is_numeric($x));

        echo "<br><br>";
        echo "-------------------------PHP Math--------------------<br>";
        //PHP Math
        echo "pi =", (pi()), "<br>"; // returns 3.1415926535898

        echo "min =", (min(0, 20, 10, 50, -6, -200)), "<br>";  // returns -200
        echo "max =", (max(0, 20, 10, 50, -6, -200)), "<br>";  // returns 50

        //Hàm abs()trả về giá trị tuyệt đối (dương) của một số:
        echo (abs(-8.9));

        //Hàm sqrt()trả về căn bậc hai của một số:
        echo (sqrt(64)), "<br>";
        //Hàm round()làm tròn số dấu phẩy động thành số nguyên gần nhất:
        echo (round(0.60)), "<br>";  // returns 1
        echo (round(0.49)), "<br>";  // returns 0
        echo (rand()), " (số random) <br>";
        echo (rand(1, 10)), " (số random từ 1 -> 10) <br>";

        echo "<br><br>";
        echo "-------------------------PHP Constants--------------------<br>";
        //PHP Constants
        define("YI", "Hello world");
        echo YI, "<br>";

        define("phones", [
            "Apple",
            "SamSung",
            "Oppo"
        ]);
        echo phones[2], "<br>";
        //------------------------------
        define("HI", "Welcome to league of legends!");

        function game()
        {
            echo HI;
        }

        game();

        echo "<br><br>";
        echo "-------------------------PHP - The if...else Statement--------------------<br>";
        //PHP - The if...else Statement
        $a = 50;
        $b = 10;
        if ($a > $b) {
            echo "Hello World";
        }

        echo "<br><br>";
        echo "-------------------------PHP Switch--------------------<br>";
        //PHP Switch

        $color = "red";
        switch ($color) {
            case "red":
                echo "color red";
                break;

            case "pink":
                echo "color pink";
                break;
        }

        echo "<br><br>";
        echo "-------------------------PHP While Loop--------------------<br>";
        //PHP While Loop
        $i = 1;
        while ($i < 6) {
            echo $i;
            $i++;
        }
        echo "<br>";

        $x = 6;
        do {
            echo "The number is: $x <br>";
            $x++;
        } while ($x <= 5);

        echo "<br>";
        //For Loop
        for ($i = 0; $i < 10; $i++) {
            echo $i, " ";
        }


        echo "<br>";
        //foreach Loop
        $age = array("Qui" => "23", "Trong" => "24", "Tin" => "25");

        foreach ($age as $x => $val) {
            echo "$x = $val<br>";
        }


        echo "<br>";
        //PHP Break and Continue
        $x = 0;

        while ($x < 10) {
            if ($x == 7) {
                $x++;
                continue;
            }
            echo "The number is: $x <br>";
            $x++;
        }

        echo "<br><br>";
        echo "-------------------------PHP Functions--------------------<br>";
        //PHP Functions

        function frend($name, $year)
        {
            echo "Tôi tên $name, sinh năm $year.<br>";
        }
        frend("Quí", "2000");
        frend("Tín", "1999");
        frend("Hưng", "2001");
        ?>

        <?php

        // declare(strict_types=1); // strict requirement
        // function setHeight(int $minheight = 50)
        // {
        //     echo "The height is : $minheight <br>";
        // }

        // setHeight(350);
        // setHeight(); // will use the default value of 50
        // setHeight(135);
        // setHeight(80);
        echo "<br>";
        ?>

        <?php
        $age = array("YiNguyen" => "24", "Truong" => "24", "Tuan" => "25");
        echo "YiNguyen is " . $age['YiNguyen'] . " years old.";

        $cars = array(
            array("Volvo", 22, 18),
            array("BMW", 15, 13)
        );
        for ($row = 0; $row < 2; $row++) {
            echo "<p><b>Row number $row</b></p>";
            echo "<ul>";
            for ($col = 0; $col < 1; $col++) {
                echo "<li>" . $cars[$row][$col] . "</li>";
            }
            echo "</ul>";
        }

        echo "<br><br>";
        echo "-------------------------Sorting Arrays--------------------<br>";
        //Sorting Arrays

        $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
        krsort($age);

        foreach ($age as $x => $x_value) {
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
        ?>
    </h3>
</body>

</html>